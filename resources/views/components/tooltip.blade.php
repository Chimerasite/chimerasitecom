<span
    x-data="{ tooltip: false }"
    x-on:mouseover="tooltip = true"
    x-on:mouseleave="tooltip = false"
    class="relative inline cursor-pointer">
        {{ $slot }}
    <div x-show="tooltip"
        class="w-40 bg-gray-950 text-gray-50 text-center text-sm p-2 rounded-md absolute -left-12 z-50">
        {{ $value }}
    </div>
</span>





