<?php

namespace App\Http\Controllers;
use App\Tweet;
use App\User;
use Illuminate\Http\Request;

class TweetLikesController extends Controller
{
    public function store(Tweet $tweet)
    {
      $tweet->like(currentUser());
      return back();
    }
    public function destroy(Tweet $tweet)
    {
      $tweet->dislike(currentUser());
        return back();
    }
}
