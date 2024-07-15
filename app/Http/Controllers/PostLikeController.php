<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    public function like(Post $post)
    {

        $post->likes()->attach(auth()->user());

        return redirect()->back()->with('success', 'You liked this post');
    }

    public function unlike(Post $post)
    {
        $post->likes()->detach(auth()->user());

        return redirect()->back()->with('success', 'You unliked this post');
    }
}
