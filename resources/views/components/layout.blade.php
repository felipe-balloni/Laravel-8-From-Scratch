<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel from Scratch Blog</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script defer src="{{ asset('js/app.js') }}"></script>
</head>
<body>

<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img alt="Lacarasts Logo" height="16" src="/images/logo.svg" width="165">
            </a>
        </div>

        <div class="mt-8 md:mt-0 flex items-center">

            @auth
                <span class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}!</span>

                <form method="POST" action="{{ route('logout') }}" class="text-xs text-blue-500 mx-6">
                    @csrf

                    <button type="submit" class="font-bold hover:underline">Log Out</button>
                </form>
            @else
                <a href="{{ route('register') }}" class="mr-6 text-xs font-bold uppercase hover:underline">Register</a>
                <a href="{{ route('login') }}" class="mr-6 text-xs font-bold uppercase hover:underline">Log In</a>
            @endauth

            <a class="bg-blue-500 hover:bg-blue-700 ml-3 rounded-full text-xs font-semibold text-white uppercase px-5 py-3"
               href="#">Subscribe for Updates</a>
        </div>
    </nav>

    {{ $slot }}

    <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
        <img alt="Lary Newsletter" class="mx-auto" src="/images/lary-newsletter-icon.svg">
        <h5 class="text-3xl">Stay in touch with the latest post</h5>
        <p class="text-sm">Promise to keep the inbox clean. No bugs. </p>

        <div class="mt-10">
            <div class="relative inline-block md:bg-gray-200 mx-auto rounded-full">
                <form action="#" class="md:flex text-sm">
                    <div class="px-5 py-1 inline-flex bg-gray-200 mx-auto rounded-full">
                        <label class="hidden" for="mail">Your email address</label>
                        <img alt="mailbox letter" src="/images/mailbox-icon.svg">
                        <input class="focus:ring-0 focus:outline-none border-none bg-transparent pl-4" id="mail"
                               name="mail"
                               placeholder="Your email address"
                               type="email">
                    </div>
                    <button class="mt-4 md:mt-0 bg-blue-500 hover:bg-blue-700 ml-3 rounded-full text-xs font-semibold text-white py-3 px-8"
                            type="submit">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>

    </footer>

</section>

<x-flash/>

</body>
</html>
