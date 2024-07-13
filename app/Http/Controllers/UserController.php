<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(User $user){
        return view('pages/profile' , ['user' => $user]);
    }
}
