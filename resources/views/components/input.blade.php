@props(['disabled' => false,
        'name',
        'label' => $name,
        'placeholder' => null,
        'type' => 'text'])

<div class="mb-6">

    <x-label for="{{ $name }}" :value="__(ucfirst($label))"/>


    @props(['disabled' => false])

    <input {{ $disabled ? 'disabled' : '' }}

    <input {{ $disabled ? 'disabled' : '' }}
           {!! $attributes->merge([
              'class' => 'rounded-md shadow-sm border-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50',
              'type' => $type]) !!}
           name="{{ $name }}"
           id="{{ $name }}"
           value="{{ old($name) }}"
           placeholder="{{ $placeholder }}"
           >

    @error($name)
    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>