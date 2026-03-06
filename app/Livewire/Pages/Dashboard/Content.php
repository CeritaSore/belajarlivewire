<?php

namespace App\Livewire\Pages\Dashboard;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Content extends Component
{
    public $postcontent;
    use WithPagination;
    public function mount()
    {
        $this->postcontent = Post::all();
    }
    public function render()
    {
        return view('livewire.pages.dashboard.content', ['postcontent' => $this->postcontent])
            ->layout('components.layouts.dashboard');
    }
}
