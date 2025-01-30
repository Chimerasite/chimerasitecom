@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center uppercase font-medium leading-5 text-gray-50 hover:text-blue-500 transition duration-150 ease-in-out'
            : 'inline-flex items-center uppercase font-medium leading-5 text-gray-50 hover:text-blue-500 hover:border-blue-500 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
