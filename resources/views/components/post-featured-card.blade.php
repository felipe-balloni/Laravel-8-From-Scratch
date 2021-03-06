@props(['post'])

<article class="transition duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1 lg:mr-8">
            <img alt="Blog Post illustration" class="rounded-xl" src="/images/illustration-1.png">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <a class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                       href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                </div>

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
                            <a href="/?author={{ $post->author->username }} ">{{ $post->author->name }}</a>
                        </h5>
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

