<?php

namespace App\Livewire\Web\Components;

use Livewire\Component;

class GuestNavigationMenu extends Component
{
    public $message = 'Hello World!';

    public function render()
    {
        return view('livewire.components.guest-navigation-menu');
    }
}
