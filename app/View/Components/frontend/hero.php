<?php

namespace App\View\Components\frontend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class hero extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $title;
    public $description;
    public $image;
    public function __construct($name, $title, $description, $image)
    {
        //
        $this->name = $name;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.hero');
    }
}
