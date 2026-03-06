<?php

namespace App\Livewire\Pages\Content;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;


class Create extends Component
{
    use WithFileUploads;
    public $name;
    public $content;
    public $status;
    public $image;
    public $oldimage;
    public $postId;

    public function mount($id = null)
    {
        if ($id) {
            $this->postId = $id;
            $post = Post::find($id);
            $this->name = $post->title;
            $this->content = $post->content;
            $this->status = $post->status;
            $this->oldimage = $post->image;
        }
    }
    public function save()
    {
        if ($this->postId) {
            $post = Post::findorfail($this->postId);
            $imagePath = $post->image;
            if ($this->image) {
                if (!$this->oldimage) {
                    unlink(storage_path('app/public/' . $this->oldimage));
                }
                $imagePath = $this->image->storeAs(
                    'images',
                    $this->image->getClientOriginalName(),
                    'public'
                );
            }

            $post->update([
                'title' => $this->name,
                'content' => $this->content,
                'status' => $this->status,
                'image' => $imagePath,
            ]);
            session()->flash('success', 'Berhasil Mengubah Data');
        } else {

            $imagePath = $this->image->storeAs(
                'images',
                $this->image->getClientOriginalName(),
                'public'
            );
            Post::create([
                'title' => $this->name,
                'content' => $this->content,
                'status' => $this->status,
                'image' => $imagePath,
            ]);
            session()->flash('success', 'Berhasil Menambahkan Data');
        }
    }
    public function render()
    {
        return view('livewire.pages.content.create')
            ->layout('components.layouts.dashboard');
    }
}
