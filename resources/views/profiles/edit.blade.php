@extends('layouts.app')

@section('content')
  <div class="mb-6 relative">
    @include('profiles._header-image')
  </div>
  <div class="mb-8 border border-gray-300 rounded-lg py-8 px-6">


    <form class="" action="{{$user->profile()}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-6">
          <label class="block mb-2 uppercase font-bold "
          for="name">Name</label>

          <input class="border border-gray-400 text-md p-3 w-full rounded-lg bg-transparent font-medium"
            type="text"
            name="name"
            value="{{$user->name}}"
            id="name"
            required>

          @error('name')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label class="block mb-2 uppercase font-bold "
          for="username">username</label>

          <input class="border border-gray-400 text-md p-3 w-full rounded-lg bg-transparent font-medium"
            type="text"
            name="username"
            value="{{$user->username}}"
            id="username"
            required>

          @error('username')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label class="block mb-2 uppercase font-bold "
          for="email">Email</label>

          <input class="border border-gray-400 text-md p-3 w-full rounded-lg bg-transparent font-medium"
            type="email"
            name="email"
            value="{{$user->email}}"
            id="email"
            required>

          @error('email')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label class="block mb-2 uppercase font-bold "
          for="avatar">avatar</label>
          <div class="flex">
            <input class="border border-gray-400 text-md p-3 w-full rounded-lg bg-transparent font-medium"
              type="file"
              name="avatar"
              id="avatar"
              >
              <img src="{{$user->avatar}}" alt="" width="40">
          </div>


          @error('name')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label class="block mb-2 uppercase font-bold "
          for="password">Password</label>

          <input class="border border-gray-400 text-md p-3 w-full rounded-lg bg-transparent font-medium"
            type="password"
            name="password"
            id="password"
            required>

          @error('password')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label class="block mb-2 uppercase font-bold "
          for="password_confirmation">Password Confirmation</label>

          <input class="border border-gray-400 text-md p-3 w-full rounded-lg bg-transparent font-medium"
            type="password"
            name="password_confirmation"
            id="password_confirmation"
            required>

          @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6 flex justify-between">
            <button
              class="bg-green-500 shadow text-white rounded py-2 px-4"
            type="submit">Submit</button>
            <a href="{{route('profile', auth()->user())}}"
              class="bg-red-500 shadow text-white rounded py-2 px-4 "
            type="button">Cancel</a>
        </div>
    </form>
    </div>
@endsection
