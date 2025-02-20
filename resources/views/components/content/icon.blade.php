@props(['link'])

<a href="{{ $link }}" class="group flex flex-col justify-around items-center space-y-2 py-8 bg-blue-950 hover:bg-gray-900 lg:text-xl px-2 text-gray-50 rounded-md text-center lg:size-40 size-28">
    <span class="relative">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="lg:size-12 size-8 transition delay-150 duration-300 ease-in-out group-hover:-translate-y-1 group-hover:scale-110">
            {{ $path }}
        </svg>
    </span>
    <span>{{ $title }}</span>
</a>
