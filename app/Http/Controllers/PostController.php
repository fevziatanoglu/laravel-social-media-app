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
        request()->validate([
            'post-content' => 'required|min:5|max:240'
        ]);
        $post =  Post::create(['content' => request()->get('post-content')]);

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


    function update($post_id)
    {

        request()->validate([
            'edit-content' => 'required|min:5|max:240'
        ]);
        $post = Post::find($post_id);
        $post->content = request()->get('edit-content');
        $post->save();

        return view('pages/post', compact('post'));
    }
}
