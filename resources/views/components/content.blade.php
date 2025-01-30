<div {{ $attributes->merge(['class' => 'flex flex-col justify-between bg-blue-950 hover:bg-gray-900 text-gray-50 rounded-md hover:shadow-md shadow-indigo-950 p-6 text-center space-y-8']) }}>
    <div class="space-y-2">
        {{ $text }}
    </div>

        <div class="lg:w-3/4 md:w-2/3 sm:w-1/2 w-2/3 m-auto grid grid-cols-3 gap-6 items-center place-content-center w-full">
            {{ $icons }}
        </div>

</div>
