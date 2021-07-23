<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>
    <h2 class="inline-flex mt-2">By Lary Laracore <img alt="Head of Lary mascot" src="./images/lary-head.svg">
    </h2>
    <p class="text-sm mt-14">
        Another year. Another update. We're refreshing the popular Laravel series with new content.
        I'm going to keep you guys to speed with what's going on!
    </p>

    <div class="space-y-2 md:space-y-0 md:space-x-4 mt-8">
        <div class="relative flex md:inline-flex items-center">
            <label class="hidden" for="category">Category</label>
            <select class="flex-1 py-3 border-none
                rounded-xl bg-gray-100 text-sm font-semibold" id="category" name="Category">
                <option disabled selected value="">Category</option>
                <option value="personal">Personal</option>
                <option value="business">Business</option>
            </select>
        </div>
        <div class="relative flex md:inline-flex items-center">
            <label class="hidden" for="otherFilters">Other Filters</label>
            <select class="flex-1 py-3 border-none
                rounded-xl bg-gray-100 text-sm font-semibold" id="otherFilters" name="otherFilters">
                <option disabled selected value="">Other Filters</option>
                <option value="foo">Foo</option>
                <option value="bar">Bar</option>
            </select></div>
        <div class="relative flex md:inline-flex items-center">
            <label class="hidden" for="search">Search</label>
            <input class="flex-1 py-3 border-none
                rounded-xl bg-gray-100 text-sm font-semibold placeholder-black" id="search" name="search"
                   placeholder="Find something" type="text">
        </div>
    </div>
</header>
