<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    public function follow(User $user){

        $follower = auth()->user();
        $follower->followings()->attach($user);

        return redirect()->back()->with('success', 'You are now following '. $user->name);    
    }

    
    public function unfollow(User $user){

        $follower = auth()->user();

        if($follower->isFollow($user)){
            $follower->followings()->detach($user);
        }

        return redirect()->back()->with('success', 'You are not following '. $user->name . ' anymore.');  
        
    }
}
