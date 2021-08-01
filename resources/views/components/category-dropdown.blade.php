<div>
    <x-dropdown>
        <x-slot name="trigger">
            <button
                    class="block text-left text-sm font-semibold appearance-none w-full rounded-xl bg-gray-100 border-none hover:border-gray-500 px-4 py-3 pr-8 shadow leading-tight focus:outline-none focus:shadow-outline">
                {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

                <x-icon name="down-arrow" class="text-gray-500" style="right: 12px;"/>
            </button>
        </x-slot>

        <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page')) }}"
                         :active="request()->routeIs('home')">All
        </x-dropdown-item>

        @foreach ($categories as $category)
            <x-dropdown-item
                    href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
                    :active='request()->is("categories/{$category->slug}")'
            >{{ ucwords($category->name) }}</x-dropdown-item>
        @endforeach
    </x-dropdown>
</div>