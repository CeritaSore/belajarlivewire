<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Breadcrump extends Component
{
    public function render()
    {
        $segments = request()->segments();
        return view('livewire.components.breadcrump', compact('segments'))
            ->layout('components.layouts.dashboard');
    }
}
