<x-layout>

    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'even' : '' }}">

            <a href="/post/{{ $post->slug }}">
                <h1>{{ $post->title }}</h1>
            </a>

            <p>{{ $post->excerpt }}</p>

        </article>
    @endforeach

</x-layout>

