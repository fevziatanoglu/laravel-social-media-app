<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function store(Post $post){

        $comment = Comment::create([
            $validatedRequest = request()->validate([
                'comment-content' => 'required|min:5|max:240'
            ])
        ]);

        return redirect()->route('get-post' , $post)->with('success', 'Post created successfully.');
    }
}
