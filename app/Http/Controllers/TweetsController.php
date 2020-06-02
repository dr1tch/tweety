<?php

namespace App\Http\Controllers;

use App\Tweet;
use App\User;
use Illuminate\Http\Request;


class TweetsController extends Controller
{

      public function index()
      {
          return view('tweets.index', [
            'tweets' => auth()->user()->timeline()
          ]);
      }


      public function store(){
        $attributes = request()->validate([
          'body' => 'required|max:255'
        ]);
        Tweet::create([
          'user_id' => auth()->id(),
          'body' => $attributes['body']
        ]);
        return redirect('/home');
        return auth()->id();
      }
}
