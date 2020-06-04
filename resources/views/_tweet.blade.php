<div class="flex p-4 bg-tran {{$loop->last ? '' : 'border-b-2 border-green-500'}}">
  <div class="mr-2 flex-shrink-0">
    <a href="{{route('profile', $tweet->user)}}">
      <img
        class="rounded-full mr-2"
        src="{{$tweet->user->avatar}}"
        alt=""
        width="40"
        height="40"
      >
    </a>
  </div>
  <div class="">
    <a href="{{$tweet->user->profile()}}" class="flex">
      <h5 class="font-bold text-blue-700 mb-4">{{ $tweet->user->name }}</h5>
      <span class="text-gray-400  mx-2 mb-4">{{'@'. $tweet->user->username }}</span>
    </a>
    <p class="text-md">{{ $tweet->body }}</p>
  </div>
</div>
