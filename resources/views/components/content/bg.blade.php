@props(['id'])

<div class="bg-gray-300" id="{{ $id }}">
    <div class="lg:grid lg:grid-cols-3 gap-y-6 lg:w-2/3 m-auto md:px-6 px-4 py-12 lg:text-left text-center ">
        <div class="mb-6">
            <h3>{{ $title }}</h3>
            <span class="text-sm">
                <i>{{ $subtitle }}</i>
            </span>
        </div>
        <div class="col-span-2">
            <div class="space-y-2">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
