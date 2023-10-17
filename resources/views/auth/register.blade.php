<x-guest-layout>
    @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    <form method="POST" action="{{ route('register') }}">
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
            <x-text-input id="mensagem" class="block mt-1 w-full" type="text" name="mensagem" :value="old('mensagem')" required autocomplete="mensagem" placeholder="Ex: Este paciente tem diabetes"/>
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
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Já tem uma conta?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
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
</x-guest-layout>