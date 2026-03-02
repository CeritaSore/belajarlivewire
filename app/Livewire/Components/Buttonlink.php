<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Buttonlink extends Component
{
    public $text, $link;
    public function render()
    {
        return view('livewire.components.buttonlink');
    }
}
