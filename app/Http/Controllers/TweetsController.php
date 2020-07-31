<?php

namespace App\Http\Controllers;

use App\Tweet;
use App\User;

class TweetsController extends Controller
{
    public function index(User $user)
    {
        return view('tweets.index', [
            'tweets' => current_user()->timeline()
        ]);
    }

    public function store()
    {
        // $attributes = request()->validate(['body' => 'required|max:255']);

        Tweet::create([
            $attributes = request()->validate([
            'body' => ['required|max:255'],
            'user_id' => auth()->id(),  
            'image' => ['file'],
            ])
        ]);

        if(request('image')) {
            $attributes['image'] = request('image')->store('images');
        }

        return redirect()->route('home');
    }
}
