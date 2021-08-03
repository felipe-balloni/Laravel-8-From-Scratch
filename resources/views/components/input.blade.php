@props(['name',
        'label' => $name,
        'placeholder',
        'type' => 'text'])

<div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
           for="{{ $name }}">
        {{ ucfirst($label) }}
    </label>

    <input class="border-none p-2 w-full rounded-lg shadow focus:outline-none focus:shadow-outline"
           type="{{ $type }}"
           name="{{ $name }}"
           id="{{ $name }}"
           value="{{ old($name) }}"
           placeholder="{{ $placeholder }}"
           required>

    @error($name)
    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>