<x-app-layout>
    <div class="bg-gray-400 text-blue-950 py-8">
        <div class="flex justify-center text-center xl:px-56 lg:px-24 md:px-16 sm:px-8 px-4">
            <h1 class="font-matrix">
                {{ __('Profile Settings') }}
            </h1>
        </div>
    </div>
    <div class="md:px-6 px-4 py-12">
        <div class="md:w-3/4 mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="sm:px-16 sm:p-8 p-4">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
            <hr class="m-auto border-t-2 border-gray-950">
            <div class="sm:px-16 sm:p-8 p-4">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
            <hr class="m-auto border-t-2 border-gray-950">
            <div class="sm:px-16 sm:p-8 p-4">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
