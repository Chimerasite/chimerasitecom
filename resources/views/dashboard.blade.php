<x-app-layout>
    <div class="bg-gray-400 text-blue-950 py-8">
        <div class="flex justify-center text-center xl:px-56 lg:px-24 md:px-16 sm:px-8 px-4">
            <h1 class="font-matrix">
                {{ __('Dashboard') }}
            </h1>
        </div>
    </div>
    <div class="md:px-6 px-4 py-12">
        <div class="md:w-3/4 mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class='flex flex-col justify-between bg-blue-950 text-gray-50 text-lg rounded-md hover:shadow-md shadow-indigo-950 p-6 text-center space-y-8'>
                {{ __('Welcome') }} {{ Auth()->user()->name }}!
            </div>
        </div>
    </div>
</x-app-layout>
