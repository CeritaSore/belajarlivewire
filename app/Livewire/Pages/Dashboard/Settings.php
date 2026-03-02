<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Component;

class Settings extends Component
{
    public function render()
    {
        return view('livewire.pages.dashboard.settings')
        ->layout('components.layouts.dashboard');
    }
}
