<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Input extends Component
{
    public $type;
    public $required = false;
    public $placeholder;
    public $name;
    public $fileType;
    public function render()
    {
        return view('livewire.components.input');
    }
}
