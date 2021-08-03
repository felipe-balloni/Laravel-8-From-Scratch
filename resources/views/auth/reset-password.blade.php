<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-300 shadow-lg">
            <h1 class="text-center font-bold text-xl">{{ __('Password Reset') }}</h1>

            <form method="POST" action="{{ route('password.update') }}" class="mt-10">
            @csrf

            <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <x-input name="email" class="block mt-1 w-full" placeholder="Your registered email" type="email"
                         required autofocus/>

                <!-- Password -->
                <x-input name="password" class="block mt-1 w-full" placeholder="Type your password" type="password"
                         required/>

                <!-- Confirm Password -->
                <x-input name="password_confirmation" class="block mt-1 w-full" label="{{__('Confirm Password')}}"
                         type="password"
                         placeholder="Re-type your password for double check." required/>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="bg-blue-500 hover:bg-blue-700">
                        {{ __('Reset Password') }}
                    </x-button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
