<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $posts = [];

        if (request()->get('search-query')) {
            $posts = Post::where('content', 'LIKE', '%' . request()->get('search-query') . '%');
        } else {
            $posts = Post::orderBy('created_at', 'DESC');
        }

        return view('pages/dashboard', ['posts' => $posts->paginate(5)]);
    }
}
