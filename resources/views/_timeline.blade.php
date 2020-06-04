<div class="border-2 border-green-500 rounded-lg mb-6">
  @forelse($tweets as $tweet)
    @include('_tweet')
  @empty
    <p class="p-4 text-center">No tweets yet.</p>
  @endforelse
</div>
