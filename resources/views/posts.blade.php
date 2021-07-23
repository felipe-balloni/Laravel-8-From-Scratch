<x-layout>

    @include('_post-header')

    <main class="md:max-w-6xl mx-auto mt-6 md:mt-10 lg:mt-20 space-y-6">

        <x-post-featured-card />

        <div class="md:grid md:grid-cols-2">
            <x-post-card />
            <x-post-card />
        </div>

        <div class="md:grid md:grid-cols-2 lg:grid lg:grid-cols-3">
            <x-post-card />
            <x-post-card />
            <x-post-card />
        </div>

    </main>

{{--    @foreach ($posts as $post)--}}
{{--        <article class="{{ $loop->even ? 'even' : '' }}">--}}
{{--            <h1>--}}
{{--                <a href="/post/{{ $post->slug }}">--}}
{{--                    {{ $post->title }}--}}
{{--                </a>--}}
{{--            </h1>--}}

{{--            <p>--}}
{{--                By <a href="/authors/{{ $post->user_id }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>--}}
{{--            </p>--}}

{{--            <p>{{ $post->excerpt }}</p>--}}

{{--        </article>--}}
{{--    @endforeach--}}

</x-layout>

