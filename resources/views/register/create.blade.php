<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-300 shadow-lg">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form action="/register" method="POST" class="mt-10">
                @csrf

                <x-input name="name" placeholder="Full name"/>
                <x-input name="username" placeholder="Must be unique. Only characters, numbers and dashes."/>
                <x-input name="email" placeholder="Must be unique and a valid email." type="email"/>
                <x-input name="password" placeholder="Min. 9 with complexity requirements." type="password"/>
                <x-input name="password_confirmation" label="Passoword Confirmation" type="password"
                         placeholder="Re-type your password for double check."/>

                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 shadow-md">
                        Submit
                    </button>
                </div>
                <span class="text-xs">* All fields are required.</span>
            </form>

        </main>
    </section>
</x-layout>