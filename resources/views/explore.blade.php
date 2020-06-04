@extends('layouts.app')

@section('content')


    @foreach($users as $user)
    <div class="flex justify-between shadow-md bg-tran rounded-lg p-6 mb-6">
      <a href="{{$user->profile()}}" class="flex items-center ">
        <img
          src="{{$user->avatar}}"
          alt="{{$user->username}}'s avatar'"
          class="bg-gray-500 mb-0 rounded-full mr-4"
          width="60"
          >
          <div class="">
            <h2 class="font-bold text-2xl text-lg mb-0">{{ $user->name }}</h2>
            <p class="font-bold text-gray-700">@<span>{{ $user->username }}</span></p>
            <!-- <p class="text-sm text-purple-600">Joined {{ $user->created_at->diffForHumans() }}</p> -->
          </div>

      </a>
      <div class="">
        <form action="{{ route('follow', $user->username) }}" method="post">
          @csrf
            <button
              type="submit"
              class="bg-green-500 rounded-lg shadow mb-0 mt-2 py-2 px-4 text-white"
              >{{ auth()->user()->following($user) ? 'Unfollow' : 'Follow' }}
            </button>
        </form>
        <!-- @Include('components._follow-button') -->
      </div>
    </div>
    @endforeach

@endsection
