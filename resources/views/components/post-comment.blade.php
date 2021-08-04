@props(['comment'])

<article class="flex mt-8 bg-gray-100 rounded-lg p-5 border border-gray-200 space-x-4">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60?u={{ $comment->id }}" alt="avatar" class="rounded-xl" width="60">
    </div>

    <div class="">
        <header>
            <h3 class="font-bold">{{ $comment->author->username }}</h3>
            <p class="text-xm">Posted at
                <time>{{ $comment->created_at->diffForHumans() }}</time>
            </p>
        </header>
        <p class="mt-4">
            {{ $comment->body }}
        </p>
    </div>
</article>