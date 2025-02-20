@props(['id'])

<div id="{{ $id }}">
    <div class="lg:grid flex lg:grid-cols-3  flex-col-reverse gap-y-6 lg:w-2/3 m-auto md:px-6 px-4 py-12 lg:text-left text-center ">
        <div class="col-span-2">
            <div class="space-y-2">
                {{ $slot }}
            </div>
        </div>
        <div class="mb-6 lg:text-right">
            <h3>{{ $title }}</h3>
            <span class="text-sm">
                <i>{{ $subtitle }}</i>
            </span>
        </div>
    </div>
</div>

