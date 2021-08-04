<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-300 shadow-lg">
            <h1 class="text-center font-bold text-xl">{{ __('Security password confirmation') }}</h1>

            <div class="mb-4 mt-6 text-sm text-gray-600">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <form method="POST" action="{{ route('password.confirm') }}" class="mt-4">
            @csrf

            <!-- Password -->
                <x-input name="password" class="block mt-1 w-full" placeholder="Type your password" type="password"
                         label="{{ __('Password') }}"
                         autocomplete="current-password"/>

                <div class="flex justify-end mt-4">
                    <x-button class="bg-blue-500 hover:bg-blue-700">
                        {{ __('Confirm') }}
                    </x-button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
