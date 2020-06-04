<?php

namespace App\Http\Controllers;


use \App\Tweet;
use \App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
      return view('profiles.show', compact('user'));
      //return $user;
    }

    public function edit(User $user)
    {
      //abort_if($user->isNot(currentUser()), 404);// first method of authorization
      //$this->authorize('edit', $user);// second method of authorization
      return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
      $attributes = request()->validate([
        'username' => [
          'string',
          'required',
          'alpha_dash',
          'max:40',
          Rule::unique('users')->ignore($user)
        ],
        'name' => [
          'string',
          'required',
          'max:50',
        ],
        'avatar' => [
          'file'
        ],
        'email' => [
          'string',
          'required',
          'max:150',
          'email'
        ],
        'password' => [
          'string',
          'required',
          'min:8',
          'max:255',
          'confirmed'
        ]
      ]);
      if(request('avatar')){
          $attributes['avatar'] = request('avatar')->store('avatars');
      }

      $user->update($attributes);
      return redirect($user->profile());
    }
}
