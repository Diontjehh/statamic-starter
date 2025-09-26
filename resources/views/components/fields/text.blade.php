@props([
    'label',
    'placeholder',
    'name',
    'handle',
    'type' => 'text',
    'required' => false,
    'value' => null,
    'instruction' => null
])

@php
    $uuid = str_random(8);
@endphp

<label {{ $attributes->class(['flex flex-col gap-1.5']) }}>
    <span class="font-bold text-blue-950">
        {{ $label }}
        @if($required)<span class="text-sm font-medium text-green-500">*</span>@endif
    </span>
    <input
        type="{{ $type }}"
        id="{{ $uuid }}-{{ $handle }}}"
        name="{{ $name ?? $handle }}"
        placeholder="{{ $placeholder ?? $label }}"
        @if($value)value="{{ $value }}" @endif
        class="w-full px-3.5 h-10 bg-white rounded-lg ring-1 ring-inset ring-gray-200  placeholder:text-gray-500 text-blue-950 transition-[color,box-shadow] duration-150 focus:ring-green-500"
        @if($required)required @endif
        {{ $attributes->whereStartsWith('wire:model') }}
        {{ $attributes->whereStartsWith('x-') }}
    >
    @error($handle)
        <span class="text-sm text-red-400"> {{ $message }}</span>
    @enderror
</label>

@if($instruction)
    <span class="mt-1 block text-sm text-midnight-400">{{ $instruction }}</span>
@endif

