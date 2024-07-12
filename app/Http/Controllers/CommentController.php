<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function store(Post $post){
        $validatedRequest = request()->validate([
            'content' => 'required|min:5|max:240'
        ]);

        $validatedRequest['user_id'] = auth()->id();
        $validatedRequest['post_id'] = $post['id']; 
      
        $comment = Comment::create($validatedRequest);

        return redirect()->route('get-post' , $post)->with('success', 'Post created successfully.');
    }
}
