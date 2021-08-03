<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-300 shadow-lg">
            <h1 class="text-center font-bold text-xl">{{ __('Forgot your Password?') }}</h1>

            <div class="my-4 text-sm text-gray-600">
                {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')"/>

            <form method="POST" action="{{ route('password.email') }}">
            @csrf

                <x-input name="email" class="block mt-1 w-full" placeholder="Your registered email" type="email" required autofocus/>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="bg-blue-400">
                        {{ __('Email Password Reset Link') }}
                    </x-button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
