<?php

namespace App\Livewire\Components;

use Livewire\Attributes\Modelable;
use Livewire\Component;
use Livewire\WithFileUploads;

class Input extends Component
{
    use WithFileUploads;
    #[Modelable]
    public $value;
    public $type;
    public $required = false;
    public $placeholder;
    public $name;
    public $fileType;
    public $dropdownOptions = [];
    public $model;
    public function render()
    {
        return view('livewire.components.input');
    }
}
