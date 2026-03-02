<?php

namespace App\Livewire\Pages\Content;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.pages.content.create')
            ->layout('components.layouts.dashboard');
    }
}
