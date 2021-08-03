@props(['value'])

<label {{ $attributes->merge(['class' => 'block mb-2 font-bold text-xs text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
