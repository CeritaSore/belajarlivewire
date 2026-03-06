<?php

namespace App\Livewire\Pages\Content;

use App\Models\Post;
use Livewire\Component;

class Edit extends Component
{
    public $name;
    public $content;
    public $status;
    public $image;
    public function mount($id)
    {
        $post = Post::findOrFail($id);
        $this->name = $post->title;
        $this->content = $post->content;
        $this->status = $post->status;
        $this->image = $post->image;
    }
    public function save($id)
    {
        $post = Post::findOrFail($id);
        $post->update([
            'title' => $this->name,
            'content' => $this->content,
            'status' => $this->status,
            'image' => $this->image,
        ]);
    }
    public function render()
    {
        return view('livewire.pages.content.edit')->layout('components.layouts.dashboard');
    }
}
