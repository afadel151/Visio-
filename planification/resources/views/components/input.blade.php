@props(['disabled' => false, 'field' => ''])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 input-bordered rounded-md shadow-sm']) !!}>
@error($field)
    <p class="mt-1 text-red-700 text-sm">{{ $message }}</p>
@enderror