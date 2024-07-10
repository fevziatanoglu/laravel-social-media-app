<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {

        // $post = new Post([
        //     'content'=>'new test123'
        // ]);

        // $post->save();
        
        // dump(Post::all());
        
        return view('pages/dashboard', ['posts' => Post::all()]);
    }
}
