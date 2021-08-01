<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <div class="space-y-2 md:space-y-0 md:space-x-4 mt-4">

        <div class="relative md:inline-flex bg-gray-100 rounded-xl">
            <x-category-dropdown />
        </div>

        {{--        <div class="relative md:inline-flex bg-gray-100 rounded-xl">--}}
        {{--            <x-dropdown>--}}
        {{--                <x-slot name="trigger">--}}
        {{--                    <button class="block text-left text-sm font-semibold appearance-none w-full rounded-xl bg-gray-100--}}
        {{--                                   border-none hover:border-gray-500 px-4 py-3 pr-8 shadow leading-tight focus:outline-none focus:shadow-outline">--}}
        {{--                        {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Other Filters' }}--}}

        {{--                        <x-icon name="down-arrow" class="text-gray-500" style="right: 12px;"/>--}}
        {{--                    </button>--}}
        {{--                </x-slot>--}}

        {{--                <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>--}}

        {{--                @foreach ($categories as $category)--}}
        {{--                    <x-dropdown-item--}}
        {{--                        href="/categories/{{ $category->slug }}"--}}
        {{--                        :active='request()->is("categories/{$category->slug}")'--}}
        {{--                    >{{ ucwords($category->name) }}</x-dropdown-item>--}}
        {{--                @endforeach--}}
        {{--            </x-dropdown>--}}
        {{--        </div>--}}

        <div class="relative md:inline-flex items-center">
            <form method="GET" action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <label class="hidden" for="search">Search</label>
                <input class="flex-1 text-sm font-semibold appearance-none w-full md:w-72 rounded-xl bg-gray-100
                              border-none hover:border-gray-500 px-4 py-3 shadow leading-tight focus:outline-none focus:shadow-outline
                              placeholder-black"
                       id="search"
                       name="search"
                       placeholder="Find something"
                       type="text"
                       value="{{ request('search') }}">
            </form>
        </div>

    </div>
</header>
