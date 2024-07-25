<?php

namespace App\Livewire;

use Livewire\Component;

class Post extends Component
{
    protected $listeners = ['navigate' => 'navigate'];

    public function navigate($url)
    {
        return redirect($url);
    }

    public function render()
    {
        return view('livewire.post');
    }
}
