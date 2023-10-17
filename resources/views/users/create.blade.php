<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Criar Usuário') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg w-1/2 mx-auto">
                <div class="max-w-full">
    <form method="POST" action="{{ route('users.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="João Silva"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="joao@exemplo.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Mensagem -->
        <div class="mt-4">
            <x-input-label for="mensagem" :value="__('Mensagem')" />
            <x-text-input id="mensagem" class="block mt-1 w-full" type="text" name="mensagem" :value="old('mensagem')" autocomplete="mensagem" placeholder="Ex: Este paciente tem diabetes"/>
            <x-input-error :messages="$errors->get('mensagem')" class="mt-2" />
        </div>
        <!-- Altura -->
        <div class="mt-4">
            <x-input-label for="altura" :value="__('Altura (CM)')" />
            <x-text-input id="altura" class="block mt-1 w-full" type="number" name="altura" :value="old('altura')" required autocomplete="altura" placeholder="Ex: 176.00"/>
            <x-input-error :messages="$errors->get('altura')" class="mt-2" />
        </div>
        <!-- Peso -->
        <div class="mt-4">
            <x-input-label for="peso" :value="__('Peso (KG)')" />
            <x-text-input id="peso" class="block mt-1 w-full" type="number" name="peso" :value="old('peso')" required autocomplete="peso"  placeholder="Ex: 80.00"/>
            <x-input-error :messages="$errors->get('peso')" class="mt-2" />
        </div>
        <!-- Telefone -->
        <div class="mt-4">
            <x-input-label for="telefone" :value="__('Telefone')" />
            <x-text-input id="telefone" class="block mt-1 w-full telefone" type="text" name="telefone" :value="old('telefone')" required autocomplete="telefone" placeholder="Ex: 5551999999999"/>
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirme a senha')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Criar conta') }}
            </x-primary-button>
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    $('.telefone').mask('(00) 0000-00009');
    $('.telefone').blur(function(event) {
    if($(this).val().length == 15){
        $(this).mask('(00) 00000-0009');
    } else {
        $(this).mask('(00) 0000-00009');
    }
    });
    </script>
</x-app-layout>