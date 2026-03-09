<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Component;

class Projects extends Component
{
    public function render()
    {
        return view('livewire.pages.dashboard.projects')->layout('components.layouts.dashboard');
    }
}
