<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    public $header = [];
    public $content = [];
    public $action = [];
    public $edit;
    public $delete;
    public function render()
    {
        return view('livewire.components.table');
    }
}
