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

        if(request()->get('search-query')){
            $posts = Post::where('content', 'LIKE', '%'.request()->get('search-query').'%')->paginate('5');
            return view('pages/dashboard', ['posts' => $posts] );
        }


        return view('pages/dashboard', ['posts' => Post::orderBy('created_at' , 'DESC')->paginate('5')]);
    }
}
