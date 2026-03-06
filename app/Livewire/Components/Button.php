<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Button extends Component
{
    public $type, $name, $action;
    public function gotoList()
    {
        $this->redirectRoute('profile.content');
    }
    public function render()
    {
        return view('livewire.components.button');
    }
}
