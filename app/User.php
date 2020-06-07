<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Tweet;
class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'email', 'avatar', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value){
      //return "https://i.pravatar.cc/150?u=".$this->email;
      if ($value) {
        return asset('storage/'.$value);
      } else {
        return asset('/images/default-avatar.svg');
      }
      return asset('storage/'.$value ?: '/images/default-avatar.svg');
      // return asset('storage/',$this->avatar);
      // if($value == null){
      //   return '/media/1.png';
      // } else {
      //   return asset($value);

    // }
    }

    public function getPasswordAttribute($value){
      $this->attributes['password'] = bcrypt($value);
    }

    public function timeline(){
      //return Tweet::latest()->where('user_id', $this->id)->get();
      // Include all of the user's tweets
      // as well as the tweets of
      // everyone they follow.. in descending order by date.

      $friends = $this->follows->pluck('id');
      //$ids->push($this->id);

      return Tweet::whereIn('user_id', $friends)
                ->orWhere('user_id', $this->id)
                ->withLikes()
                ->latest()->get();
    }

    public function tweets()
    {
      return $this->hasMany(Tweet::class)->latest();
    }

    public function profile($append = '')
    {
      $path = route('profile', $this->username);
      return $append ? "{$path}/{$append}" : $path;
    }


    // public function getRouteKeyName()
    // {
    //   return 'name';
    // }
}
