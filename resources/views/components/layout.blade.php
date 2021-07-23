<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel from Scratch Blog</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

</head>
<body>

<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img alt="Lacarasts Logo" height="16" src="./images/logo.svg" width="165">
            </a>
        </div>
        <div class="mt-8 md:mt-0">
            <a class="text-xs font-bold uppercase" href="/">Home Page</a>
            <a class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase px-5 py-3" href="#">Subscribe
                for Updates</a>
        </div>
    </nav>

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

    <main class="md:max-w-6xl mx-auto mt-6 md:mt-10 lg:mt-20 space-y-6">

        <article
            class="transition duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
            <div class="py-6 px-5 lg:flex">
                <div class="flex-1 lg:mr-8">
                    <img alt="Blog Post illustration" class="rounded-xl" src="./images/illustration-1.png">
                </div>

                <div class="flex-1 flex flex-col justify-between">
                    <header class="mt-8">
                        <div class="space-x-2">
                            <a class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                               href="#">Techniques</a>
                            <a class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                               href="#">Updates</a>
                        </div>

                        <div class="mt-4">
                            <h1 class="text-3xl">This is a big title and it will look great on two or even three lines.
                                Wooohoo!</h1>
                            <span class="mt-2 block text-gray-400 text-xs">
                                Published <time>1 day ago</time>
                            </span>
                            <p></p>
                        </div>
                    </header>
                    <div class="text-sm mt-2">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi fugiat illum in magni
                            neque nisi porro quisquam quo soluta voluptatibus.
                        </p>

                        <p class="mt-4">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.
                        </p>
                    </div>
                    <footer class="flex justify-between items-center mt-8">
                        <div class="flex items-center text-sm">
                            <img alt="Lary avatar" src="./images/lary-avatar.svg">
                            <div class="ml-3">
                                <h5 class="font-bold">Lary Laracore</h5>
                                <h6>Mascot at Laracasts</h6>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <a class="text-sm font-semibold bg-gray-200 rounded-full px-8 py-2 " href="#">Read More</a>
                        </div>
                    </footer>
                </div>
            </div>
        </article>

        <div class="md:grid md:grid-cols-2">

            <article
                class="transition duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="py-6 px-5">
                    <div class="flex-1">
                        <img alt="Blog Post illustration" class="rounded-xl" src="./images/illustration-2.png">
                    </div>

                    <div class="flex-1 flex flex-col justify-between mt-8">
                        <header>
                            <div class="space-x-2">
                                <a class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                   href="#">Techniques</a>
                                <a class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                   href="#">Updates</a>
                            </div>

                            <div class="mt-4">
                                <h1 class="text-3xl">This is a big title and it will look great on two or even three
                                    lines.
                                    Wooohoo!</h1>
                                <span class="mt-2 block text-gray-400 text-xs">
                                Published <time>1 day ago</time>
                            </span>
                                <p></p>
                            </div>
                        </header>
                        <div class="text-sm mt-4">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi fugiat illum in
                                magni
                                neque nisi porro quisquam quo soluta voluptatibus.
                            </p>

                            <p class="mt-4">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla
                                pariatur.
                            </p>
                        </div>
                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex items-center text-sm">
                                <img alt="Lary avatar" src="./images/lary-avatar.svg">
                                <div class="ml-3">
                                    <h5 class="font-bold">Lary Laracore</h5>
                                    <h6 class="md:text-xs">Mascot at Laracastssasfdasdf</h6>
                                </div>
                            </div>
                            <div class="hidden md:block md:whitespace-nowrap">
                                <a class="text-sm font-semibold bg-gray-200 rounded-full px-8 py-2 " href="#">Read
                                    More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article>

            <article
                class="transition duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="py-6 px-5">
                    <div class="flex-1">
                        <img alt="Blog Post illustration" class="rounded-xl" src="./images/illustration-3.png">
                    </div>

                    <div class="flex-1 flex flex-col justify-between mt-8">
                        <header>
                            <div class="space-x-2">
                                <a class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                   href="#">Techniques</a>
                                <a class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                   href="#">Updates</a>
                            </div>

                            <div class="mt-4">
                                <h1 class="text-3xl">This is a big title and it will look great on two or even three
                                    lines.
                                    Wooohoo!</h1>
                                <span class="mt-2 block text-gray-400 text-xs">
                                Published <time>1 day ago</time>
                            </span>
                                <p></p>
                            </div>
                        </header>
                        <div class="text-sm mt-4">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi fugiat illum in
                                magni
                                neque nisi porro quisquam quo soluta voluptatibus.
                            </p>

                            <p class="mt-4">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla
                                pariatur.
                            </p>
                        </div>
                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex items-center text-sm">
                                <img alt="Lary avatar" src="./images/lary-avatar.svg">
                                <div class="ml-3">
                                    <h5 class="font-bold">Lary Laracore</h5>
                                    <h6 class="md:text-xs">Mascot at Laracasts</h6>
                                </div>
                            </div>
                            <div class="hidden md:block md:whitespace-nowrap">
                                <a class="text-sm font-semibold bg-gray-200 rounded-full px-8 py-2 " href="#">Read
                                    More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article>

        </div>

        <div class="md:grid md:grid-cols-2 lg:grid lg:grid-cols-3">

            <article
                class="transition duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="py-6 px-5">
                    <div class="flex-1">
                        <img alt="Blog Post illustration" class="rounded-xl" src="./images/illustration-4.png">
                    </div>

                    <div class="flex-1 flex flex-col justify-between mt-8">
                        <header>
                            <div class="space-x-2">
                                <a class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                   href="#">Techniques</a>
                                <a class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                   href="#">Updates</a>
                            </div>

                            <div class="mt-4">
                                <h1 class="text-3xl">This is a big title and it will look great on two or even three
                                    lines.
                                    Wooohoo!</h1>
                                <span class="mt-2 block text-gray-400 text-xs">
                                Published <time>1 day ago</time>
                            </span>
                                <p></p>
                            </div>
                        </header>
                        <div class="text-sm mt-4">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi fugiat illum in
                                magni
                                neque nisi porro quisquam quo soluta voluptatibus.
                            </p>

                            <p class="mt-4">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla
                                pariatur.
                            </p>
                        </div>
                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex items-center text-sm">
                                <img alt="Lary avatar" src="./images/lary-avatar.svg">
                                <div class="ml-3">
                                    <h5 class="font-bold">Lary Laracore</h5>
                                    <h6>Mascot at Laracasts</h6>
                                </div>
                            </div>
                            <div class="hidden md:block md:whitespace-nowrap">
                                <a class="text-sm font-semibold bg-gray-200 rounded-full px-8 py-2 " href="#">Read
                                    More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article>

            <article
                class="transition duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="py-6 px-5">
                    <div class="flex-1">
                        <img alt="Blog Post illustration" class="rounded-xl" src="./images/illustration-5.png">
                    </div>

                    <div class="flex-1 flex flex-col justify-between mt-8">
                        <header>
                            <div class="space-x-2">
                                <a class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                   href="#">Techniques</a>
                                <a class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                   href="#">Updates</a>
                            </div>

                            <div class="mt-4">
                                <h1 class="text-3xl">This is a big title and it will look great on two or even three
                                    lines.
                                    Wooohoo!</h1>
                                <span class="mt-2 block text-gray-400 text-xs">
                                Published <time>1 day ago</time>
                            </span>
                                <p></p>
                            </div>
                        </header>
                        <div class="text-sm mt-4">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi fugiat illum in
                                magni
                                neque nisi porro quisquam quo soluta voluptatibus.
                            </p>

                            <p class="mt-4">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla
                                pariatur.
                            </p>
                        </div>
                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex items-center text-sm">
                                <img alt="Lary avatar" src="./images/lary-avatar.svg">
                                <div class="ml-3">
                                    <h5 class="font-bold">Lary Laracore</h5>
                                    <h6>Mascot at Laracasts</h6>
                                </div>
                            </div>
                            <div>
                                <a class="text-sm font-semibold bg-gray-200 rounded-full px-8 py-2 " href="#">Read
                                    More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article>

            <article
                class="transition duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="py-6 px-5">
                    <div class="flex-1">
                        <img alt="Blog Post illustration" class="rounded-xl" src="./images/illustration-1.png">
                    </div>

                    <div class="flex-1 flex flex-col justify-between mt-8">
                        <header>
                            <div class="space-x-2">
                                <a class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                   href="#">Techniques</a>
                                <a class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                   href="#">Updates</a>
                            </div>

                            <div class="mt-4">
                                <h1 class="text-3xl">This is a big title and it will look great on two or even three
                                    lines.
                                    Wooohoo!</h1>
                                <span class="mt-2 block text-gray-400 text-xs">
                                Published <time>1 day ago</time>
                            </span>
                                <p></p>
                            </div>
                        </header>
                        <div class="text-sm mt-4">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi fugiat illum in
                                magni
                                neque nisi porro quisquam quo soluta voluptatibus.
                            </p>

                            <p class="mt-4">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla
                                pariatur.
                            </p>
                        </div>
                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex items-center text-sm">
                                <img alt="Lary avatar" src="./images/lary-avatar.svg">
                                <div class="ml-3">
                                    <h5 class="font-bold">Lary Laracore</h5>
                                    <h6>Mascot at Laracasts</h6>
                                </div>
                            </div>
                            <div>
                                <a class="text-sm font-semibold bg-gray-200 rounded-full px-8 py-2 " href="#">Read
                                    More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article>

        </div>

    </main>

    <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
        <img alt="Lary Newsletter" class="mx-auto" src="./images/lary-newsletter-icon.svg">
        <h5 class="text-3xl">Stay in touch with the latest post</h5>
        <p class="text-sm">Promise to keep the inbox clean. No bugs. </p>

        <div class="mt-10">
            <div class="relative inline-block md:bg-gray-200 mx-auto rounded-full">
                <form action="#" class="md:flex text-sm">
                    <div class="px-5 py-3 inline-flex bg-gray-200 mx-auto rounded-full">
                        <label class="hidden" for="mail">Your email address</label>
                        <img alt="mailbox letter" src="images/mailbox-icon.svg">
                        <input class="focus:ring-0 focus:outline-none border-none bg-transparent pl-4" id="mail"
                               name="mail"
                               placeholder="Your email address"
                               type="email">
                    </div>
                    <button class="mt-4 md:mt-0 bg-blue-500 hover:bg-blue-600 ml-3 rounded-full text-xs font-semibold text-white py-3 px-8"
                            type="submit">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>

    </footer>

</section>

</body>
</html>
