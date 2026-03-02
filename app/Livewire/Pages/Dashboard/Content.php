<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Component;

class Content extends Component
{
    public function render()
    {
        return view('livewire.pages.dashboard.content')
            ->layout('components.layouts.dashboard');
    }
}
