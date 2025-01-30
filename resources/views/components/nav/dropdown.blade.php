@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'bg-gray-900', 'toggle'])

@php
$alignmentClasses = match ($align) {
    'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
    'right' => 'ltr:origin-top-right rtl:origin-top-left -top-3',
    'top' => 'origin-top',
    'bottom' => '',
    default => 'ltr:origin-top-right rtl:origin-top-left end-0',
};

$toggleClasses = match ($toggle) {
    '1' => 'start-36',
    '' => 'start-12',
    'set' => ' ',
};

$width = match ($width) {
    '48' => 'w-48',
    default => $width,
};
@endphp

<div class="relative" x-data="{ open: false }" x-cloak @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="lg:absolute z-50 mt-2 lg:overflow-hidden {{ $width }} rounded-md lg:shadow-lg {{ $alignmentClasses }} {{ $toggleClasses }}"
            style="display: none;"
            @click="open = false">
        <div class="lg:bg-gray-700 rounded-md {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
