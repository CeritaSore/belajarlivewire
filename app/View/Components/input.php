<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     */
    public $name; #nama untuk label
    public $type; #type input
    public $fileTypes; #tipe file yang boleh diupload
    public $placeholder; #placeholder untuk input
    public $required; #apakah input wajib diisi
    public $model; #model untuk binding data

    public function __construct($name = '', $type = '', $fileTypes = '', $placeholder = '', $required = false, $model = '')
    {
        $this->name = $name;
        $this->type = $type;
        $this->fileTypes = $fileTypes;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
