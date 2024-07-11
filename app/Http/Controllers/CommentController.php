<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function store(Post $post){

        request()->validate([
            'comment-content' => 'required|min:5|max:240'
        ]);

        $comment = new Comment();
        $comment->post_id = $post->id;
        $comment->content = request()->get('comment-content');
        // $comment = Comment::create([
        //     'post_id' => $post,
        //     'content' => request()->get('comment-content'),
        // ]);

        $comment->save();

        return redirect()->route('get-post' , $post)->with('success', 'Post created successfully.');
    }
}
