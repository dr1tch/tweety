<div class="flex p-4 bg-tran {{$loop->last ? '' : 'border-b-2 border-green-500'}}" style="width: 700px;">
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
      <h5 class="font-bold text-blue-700">{{ $tweet->user->name }}</h5>
      <span class="text-gray-400  mx-2">{{'@'. $tweet->user->username }}</span>
    </a>
    <span class=" text-xs">{{$tweet->created_at->diffForHumans()}}</span>
    <p class="text-md mt-4">{{ $tweet->body }}</p>
    @include('components._like-form', [
    'tweet' => $tweet
    ])
  </div>
</div>
