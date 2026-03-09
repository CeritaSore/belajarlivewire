<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.pages.dashboard.about')->layout('components.layouts.dashboard');
    }
}
