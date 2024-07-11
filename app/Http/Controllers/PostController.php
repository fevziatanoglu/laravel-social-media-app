<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    function store()
    {
        request()->validate([
            'post-content' => 'required|min:5|max:240'
        ]);
        $post =  Post::create(['content' => request()->get('post-content')]);

        return redirect()->route('dashboard')->with('success', 'Post created successfully.');
    }


    function delete(Post $post_id){


        $post_id->delete();
        return redirect()->route('dashboard')->with('success', 'Post deleted successfully.');

    }
}
