<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostIndex extends Component
{
    public function render()
    {
        return view("livewire.post-index", [
            "posts" => Post::all(),
        ]);
    }
}
