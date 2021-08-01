@props(['post'])

<article {{ $attributes->merge (['class' => 'transition duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}>
    <div class="py-6 px-5">
        <div class="flex-1">
            <img alt="Blog Post illustration" class="rounded-xl" src="/images/illustration-4.png">
        </div>

        <div class="mt-6 flex flex-col justify-between flex-1">
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

            <div class="text-sm mt-2 space-y-4">
                {!! $post->excerpt !!}
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img alt="Lary avatar" src="/images/lary-avatar.svg">
                    <div class="ml-3">
                        <h5 class="font-bold">
                            <a href="/authors/{{ $post->author->username }} ">{{ $post->author->name }}</a>
                        </h5>
                    </div>
                </div>
                <div class="hidden lg:block md:whitespace-nowrap">
                    <a class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                       href="/post/{{ $post->slug }}">
                        Read More
                    </a>
                </div>
            </footer>

        </div>

    </div>
</article>

