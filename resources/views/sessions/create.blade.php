<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-300 shadow-lg">
            <h1 class="text-center font-bold text-xl">Log In!</h1>
            <form action="/login" method="POST" class="mt-10">
                @csrf

                <x-input name="email" placeholder="Your registered email"/>
                <x-input name="password" placeholder="Type your password" type="password"/>

                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 shadow-md">
                        Log In
                    </button>
                </div>
                <span class="text-xs">* All fields are required.</span>
            </form>

        </main>
    </section>
</x-layout>