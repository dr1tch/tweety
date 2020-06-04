<div class="border border-blue-400 bg-tran rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="post">
      @csrf
        <textarea
          name="body"
          class="w-full resize-none bg-transparent text-lg"
          placeholder="what's up!"
          required
        ></textarea>
        <hr class="my-4">

        <footer class="flex justify-between">
          <img
            class="rounded-full mr-2"
            src="{{ auth()->user()->avatar}}"
            alt=""
            width="40"
            height="40"
          >
          <button class="bg-blue-500 rounded-lg shadow py-2 px-4 text-white" type="submit">Tweet</button>
        </footer>
    </form>

    @error('body')
	<p class="text-red text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
