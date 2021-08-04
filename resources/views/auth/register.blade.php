<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-300 shadow-lg">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form action="{{ route('register') }}" method="POST" class="mt-10">
                @csrf

                <x-input name="name" class="block mt-1 w-full" placeholder="Full name" required autofocus/>
                <x-input name="username" class="block mt-1 w-full" placeholder="Must be unique. Only characters, numbers and dashes." required/>
                <x-input name="email" class="block mt-1 w-full" placeholder="Must be unique and a valid email." type="email" required/>
                <x-input name="password" class="block mt-1 w-full" placeholder="Min. 9 with complexity requirements." type="password" required/>
                <x-input name="password_confirmation" class="block mt-1 w-full" label="Password Confirmation" type="password"
                         placeholder="Re-type your password for double check." required/>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="ml-4 bg-blue-500 hover:bg-blue-700">
                        {{ __('Register') }}
                    </x-button>
                </div>
                <span class="text-xs">* All fields are required.</span>
            </form>

        </main>
    </section>
</x-layout>
