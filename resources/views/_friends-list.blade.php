
@auth
<h3 class="text-lg font-bold mb-4 text-center">Following</h3>
<ul>
  @forelse(currentUser()->follows as $user)
  <div class="flex justify-between">
    <div class="">
      <a href="{{route('profile', $user->username)}}">
      <li class="mb-4">
        <div class="flex items-center text-sm">
          <img
            class="rounded-full mr-2"
            src="{{$user->avatar}}"
            alt=""
            width="50"
            height="50"
          >
          <div class="block">
              <h4 class="font-semibold text-sm">{{$user->name}}</h4>
              <span>{{'@'. $user->username}}</span>
          </div>

        </div>
      </li>
    </a>
    </div>
    <div class="">
      @if(auth()->user()->isNot($user))
      <form action="{{ route('follow', $user->username) }}" method="post">
        @csrf
          <button
            type="submit"
            class="hover:bg-green-500 hover:text-white mt-2 hover:shadow bg-transparent border text-green-500 font-medium border-green-500 rounded-lg py-1 px-3 text-white"
            >{{ auth()->user()->following($user) ? 'Unfollow' : 'Follow' }}
          </button>
      </form>
      @endunless

    </div>
  </div>

  @empty
    <li class="mb-4">No Friends Yet!</li>
  @endforelse
</ul>
@endauth
