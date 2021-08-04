@props(['post'])

@auth()
    <form action="{{ route('comment.store', $post->slug) }}" method="POST"
          class="border border-gray-200 p-6 rounded-xl">
        @csrf
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="avatar" class="rounded-full"
                 width="40">
            <h2 class="ml-4">Want to participate?</h2>
        </header>
        <div class="mt-6">
            <textarea name="body"
                      class="rounded-md shadow-sm border border-gray-200 focus:ring focus:ring-indigo-200
                             focus:ring-opacity-50 w-full text-sm"
                      id="" rows="5"
                      placeholder="Quick, things of something to say!"
                      required
            ></textarea>
            @error('body')
            <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-6 flex justify-end">
            <x-button class="bg-blue-500 hover:bg-blue-700 rounded-full">Post</x-button>
        </div>
    </form>
@else
    <p class="font-semibold">
        <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Register
        </a> or
        <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Log in
        </a> to leave a comment.
    </p>
@endauth