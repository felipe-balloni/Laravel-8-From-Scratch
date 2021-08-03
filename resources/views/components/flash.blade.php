@if (session()->has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bg-green-500 opacity-90 text-white py-2 px-4 rounded-xl top-2 left-3 text-sm
          ease-in-out duration-300"
    >
        <p>{{ session('success') }}</p>
    </div>
@endif