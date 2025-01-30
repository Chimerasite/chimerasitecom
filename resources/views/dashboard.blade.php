<x-app-layout>
    <div class="bg-gray-400 py-8">
        <div class="flex justify-center text-center xl:px-56 lg:px-24 md:px-16 sm:px-8 px-4">
            <h1 class="font-matrix">
                {{ __('Dashboard') }}
            </h1>
        </div>
    </div>
    <div class="md:px-6 px-4 py-12">
        <div class="md:w-3/4 mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
