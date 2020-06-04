
@auth
<h3 class="text-lg font-bold mb-4 text-center">Following</h3>
<ul>
  @forelse(currentUser()->follows as $user)
  <a href="{{route('profile', $user->username)}}">
  <li class="mb-4">
    <div class="flex items-center text-sm">
      <img
        class="rounded-full mr-2"
        src="{{$user->avatar}}"
        alt=""
        width="40"
        height="40"
      >{{$user->name}}
    </div>
  </li>
</a>
  @empty
    <li class="mb-4">No Friends Yet!</li>
  @endforelse
</ul>
@endauth
