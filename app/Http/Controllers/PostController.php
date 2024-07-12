<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    function index(Post $post)
    {
        return view('pages/post', compact('post'));
    }

    function store()
    {
        $validatedRequest = request()->validate([
            'content' => 'required|min:5|max:240'
        ]);

        $post =  Post::create($validatedRequest);
        return redirect()->route('dashboard')->with('success', 'Post created successfully.');
    }


    function delete(Post $post)
    {
        $post->delete();
        return redirect()->route('dashboard')->with('success', 'Post deleted successfully.');
    }

    function edit(Post $post)
    {
        $isEdit = true;
        return view('pages/post', compact('post', 'isEdit'));
    }


    function update(Post $post)
    {

        $validatedRequest = request()->validate(['content' => 'required|min:5|max:240']);

        $post = Post::updateOrCreate($validatedRequest);

        return view('pages/post', compact('post'));
    }
}
