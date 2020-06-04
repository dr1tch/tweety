@extends('layouts.app')

@section('content')
    <header class="mb-6 relative bg-tran rounded-lg">
      @include('profiles._header-image')

      <div class="lg:flex md:block justify-between items-center px-6 mb-4">
        <div class="mt-10">
          <h2 class="font-bold text-2xl text-lg mb-0">{{ $user->name }}</h2>
          <p class="font-bold text-gray-500">@<span>{{ $user->username }}</span></p>
          <p class="text-sm text-purple-600">Joined {{ $user->created_at->diffForHumans() }}</p>
        </div>
        <div class="flex">

          @can('edit', $user)
            <a href="{{$user->profile('edit')}}" class="rounded-full border border-green-500 text-green-500 shadow py-2 px-4 mr-2">Edit Profile</a>

          @endcan
          @include('components._follow-button')
        </div>
      </div>
      <p class="text-sm mx-10 py-6">
        Tailwind CSS is a highly customizable, low-level CSS framework
        that gives you all of the building blocks you need to build bespoke designs without
        any annoying opinionated styles you have to fight to override.
      </p>



    </header>


   @include('_timeline',[
    'tweets' => $user->tweets
   ] )

@endsection
