<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-300">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form action="/register" method="POST" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="name">
                        name
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded-md"
                           type="text"
                           name="name"
                           id="name"
                           value="{{ old('name') }}"
                           placeholder="Full name"
                           required>

                    @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="username">
                        username
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded-md"
                           type="text"
                           name="username"
                           id="username"
                           value="{{ old('username') }}"
                           placeholder="Must be unique. Only characters, numbers and dashes."
                           required>

                    @error('username')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email">
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded-md"
                           type="email"
                           name="email"
                           id="email"
                           value="{{ old('email') }}"
                           placeholder="A valid email, we'll use active you account."
                           required>

                    @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password">
                        Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded-md"
                           type="password"
                           name="password"
                           id="password"
                           placeholder="Min. 9 with complexity requirements."
                           required>

                    @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password_confirmation">
                        Password Confirmation
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded-md"
                           type="password"
                           name="password_confirmation"
                           id="password_confirmation"
                           placeholder="Re-type your password for double check."
                           required>

                    @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
                <span class="text-xs">* All fields are required.</span>
            </form>

        </main>
    </section>
</x-layout>