<form action="#" method="Post" class="border border-gray-200 p-6 rounded-xl">
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
                            ></textarea>
    </div>
    <div class="mt-6 flex justify-end">
        <x-button class="bg-blue-500 hover:bg-blue-700 rounded-full">Post</x-button>
    </div>
</form>