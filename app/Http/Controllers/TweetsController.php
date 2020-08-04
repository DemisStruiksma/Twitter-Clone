<?php

namespace App\Http\Controllers;

use App\Tweet;
use App\User;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    public function index(User $user)
    {
        return view('tweets.index', [
            'tweets' => current_user()->timeline()
        ]);
    }

    public function store(Tweet $tweet)
    {
        $attributes = request()->validate([
            'body' => 'required|max:255',
            'image' => ['file'],
            ]);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body'],
            // 'image' => $attributes['image'],
        ]);

        if(request('image')) {
            $attributes['image'] = request('image')->store('images');
        }

        $tweet->update($attributes);

        flash('Published tweet!');

        return redirect()->route('home');
    }
}
