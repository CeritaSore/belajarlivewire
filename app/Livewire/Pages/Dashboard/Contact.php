<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        return view('livewire.pages.dashboard.contact')->layout('components.layouts.dashboard');
    }
}
