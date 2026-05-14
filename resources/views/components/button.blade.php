@props([
    'href' => '#'
])

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => 'inline-flex items-center justify-center px-8 py-4 rounded-full bg-white text-black font-semibold hover:scale-105 transition duration-300'
    ]) }}
>
    {{ $slot }}
</a>
