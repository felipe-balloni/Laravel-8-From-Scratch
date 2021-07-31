@props(['post'])

<article {{ $attributes->merge (['class' => 'transition duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}>
    <div class="py-6 px-5">
        <div class="flex-1">
            <img alt="Blog Post illustration" class="rounded-xl" src="/images/illustration-4.png">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8">
                <x-category-button :category="$post->category" />

                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
                    </h1>
                    <span class="mt-2 block text-gray-400 text-xs">
                            Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-2">
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img alt="Lary avatar" src="/images/lary-avatar.svg">
                    <div class="ml-3">
                        <h5 class="font-bold">{{ $post->author->name }}</h5>
                        <h6>Mascot at Laracasts</h6>
                    </div>
                </div>
                <div class="hidden md:block md:whitespace-nowrap">
                    <a class="text-sm font-semibold bg-gray-200 rounded-full px-8 py-2" href="/post/{{ $post->slug }}">
                        Read More
                    </a>
                </div>
            </footer>

        </div>

    </div>
</article>

