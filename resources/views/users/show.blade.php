<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ver Usuário') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg w-1/2 mx-auto">
                <div class="max-w-full">
                    <div>
                        <x-input-label for="name" :value="__('Nome')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>
                    <br>
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('name', $user->email)" required autofocus autocomplete="email" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div>
                </div>
                <br>
                <div>
                    <x-input-label for="mensagem" :value="__('Mensagem')" />
                    <x-text-input id="mensagem" name="mensagem" type="text" class="mt-1 block w-full" :value="old('mensagem', $user->mensagem)" autofocus autocomplete="mensagem" />
                    <x-input-error class="mt-2" :messages="$errors->get('mensagem')" />
                </div>
                <br>
                <div>
                    <x-input-label for="telefone" :value="__('Telefone')" />
                    <x-text-input id="telefone" name="telefone" type="text" class="mt-1 block w-full telefone" :value="old('telefone', $user->telefone)" required autofocus autocomplete="telefone" />
                    <x-input-error class="mt-2" :messages="$errors->get('telefone')" />
                </div>
                <br>
                <div>
                    <x-input-label for="altura" :value="__('Altura')" />
                    <x-text-input id="altura" name="altura" type="text" class="mt-1 block w-full" :value="old('altura', $user->altura)" required autofocus autocomplete="altura" />
                    <x-input-error class="mt-2" :messages="$errors->get('altura')" />
                </div>
                <br>
                <div>
                    <x-input-label for="peso" :value="__('Peso')" />
                    <x-text-input id="peso" name="peso" type="text" class="mt-1 block w-full" :value="old('peso', $user->peso)" required autofocus autocomplete="peso" />
                    <x-input-error class="mt-2" :messages="$errors->get('peso')" />
                </div>
                <br>
                <a href="{{ route('users.index') }}" class="text-blue-500 hover:underline">{{ __('Voltar para a lista de usuários') }}</a>
            </div>
        </div>
    </div>
</x-app-layout>