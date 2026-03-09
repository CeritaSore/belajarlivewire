<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Component;

class Hero extends Component
{
    public function render()
    {
        return view('livewire.pages.dashboard.hero')->layout('components.layouts.dashboard');
    }
}
