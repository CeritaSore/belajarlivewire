<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Navbar extends Component
{
    public $menu = [];
    public function render()
    {
        return view('livewire.components.navbar');
    }
}
