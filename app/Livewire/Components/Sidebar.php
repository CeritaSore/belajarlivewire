<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Sidebar extends Component
{
    public $title;
    public $menu = [];
    public $navmenu = [];
    public function render()
    {
        return view('livewire.components.sidebar');
    }
}
