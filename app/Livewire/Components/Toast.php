<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Toast extends Component
{
    public $message;
    public $value;
    public function render()
    {
        return view('livewire.components.toast');
    }
}
