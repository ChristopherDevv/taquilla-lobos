<?php

use App\Livewire\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('livewire.web.guest-landing.welcome');
});

Route::get('/games-available', function () {
    return view('livewire.web.guest-landing.games-available');
})->name('gamesAvailable');
 
Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});
 
Route::get('/google-auth/callback', function () {
    $user_google = Socialite::driver('google')->user();

    $user = User::firstOrCreate([
        'google_id' => $user_google->id
    ], [
        'name' => $user_google->name,
        'email' => $user_google->email,
        'google_id' => $user_google->id,
        'avatar' => $user_google->avatar
    ]);

    auth()->login($user, true);
 
    return redirect()->to('/dashboard');
    
});

/* 
* Sobre escribir la ruta de login
*/
/* Route::get('/login', function () {
    return view('auth.login');
})->name('login'); */

Route::post('/login', function (Request $request) {


    $user = User::where('email', $request->email)->first();

    if ($user && $user->password == null && $user->google_id != null) {
        // El usuario se registró a través de Google y no tiene una contraseña
        return redirect()->back()->withErrors(['email' => 'Por favor inicia sesión con Google.']);
    }
    
    $credentials = $request->only('email', 'password');
    if (auth()->attempt($credentials)) {
        return redirect()->to('/dashboard');
    }
    return back()->withErrors([
        'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
    ]);

});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');


Route::get('/post-view', Post::class)->name('post-view');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/posts', function () {
        return view('posts');
    })->name('posts');
    
});
