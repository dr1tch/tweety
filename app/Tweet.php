<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;


class Tweet extends Model
{
    protected $guarded = [];

    use Likable;

    public function user(){
      return $this->belongsTo(User::class);
    }

}
