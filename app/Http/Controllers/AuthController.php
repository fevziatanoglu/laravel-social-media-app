<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{   



    function register()
    {
        return view('pages/register');
    }



    function store()
    {
        $validaitedRequest = request()->validate([
            'name' => 'required|min:3|max:30',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required'
        ]);

        User::create([
            'name' => $validaitedRequest['name'],
            'email' => $validaitedRequest['email'],
            'password' => bcrypt($validaitedRequest['password'])
        ]);

        return redirect()->route('dashboard')->with('success', 'User registered successfully.');
    }

    function login()
    {
        return view('pages/login');
    }

    function authenticate()
    {
        // clear session
        request()->session()->regenerate();

        $validaitedRequest = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (auth()->attempt($validaitedRequest)) {
            return redirect()->route('dashboard')->with('success', 'User logged in successfully.');
        }
        return redirect()->route('login')->withErrors(['email' => 'Wrong email or password']);
    }


    function logout(){

        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('dashboard')->with('success', 'User logged out successfully.');


    }
}
