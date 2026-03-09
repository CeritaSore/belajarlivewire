<?php

namespace App\View\Components\backend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class sidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public $sidebarTitle;
    public $sidebarTagline;
    public $sidebarMenu;
    public function __construct($sidebarTagline, $sidebarTitle, $sidebarMenu = [])
    {
        //
        $this->sidebarTitle = $sidebarTitle;
        $this->sidebarTagline = $sidebarTagline;
        $this->sidebarMenu = $this->getSidebarRoutes();
    }

    /**
     * Get sidebar routes matching web.php routes
     */
    private function getSidebarRoutes()
    {
        return [
            ['link' => '/dashboard', 'name' => 'Dashboard'],
            ['link' => '/dashboard/hero', 'name' => 'Hero Section'],
            ['link' => '/dashboard/about', 'name' => 'About Section'],
            ['link' => '/dashboard/education', 'name' => 'Education Section'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.backend.sidebar');
    }
}
