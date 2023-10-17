<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Meu Perfil') }}
        </h2>
    </x-slot>

    <br>
    <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg w-1/2 mx-auto">
            <div class="max-w-full">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow w-1/2 sm:rounded-lg mx-auto">
                <div class="max-w-full">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow w-1/2 sm:rounded-lg mx-auto">
                <div class="max-w-full">
                    @include('profile.partials.delete-user-form')
                </div>
                
            </div>
            <br>
        </div>
    </div>
</x-app-layout>
