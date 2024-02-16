@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex gap-2 items-center px-1 text-white font-semibold text-sm leading-5 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'flex gap-2 items-center px-1 text-gray-300 hover:text-white text-sm leading-5 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
