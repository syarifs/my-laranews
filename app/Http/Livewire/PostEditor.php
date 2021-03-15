<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PostEditor extends Component
{
    public $title;
    public $image;
    public $post;

    public function render()
    {
        return view("livewire.post-editor");
    }

    public function store()
    {
        $this->validate([
            "title" => "required",
            "image" => "required",
            "post" => "required",
        ]);
        Post::create([
            "title" => $this->title,
            "image_url" => $this->image,
            "content" => $this->post,
            "author" => Auth::id(),
        ]);
    }
}
