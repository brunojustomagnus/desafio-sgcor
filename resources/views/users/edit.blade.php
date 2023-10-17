<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Perfil') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg w-1/2 mx-auto">
                <div class="max-w-full">
                    <form method="post" action="{{ route('users.update', ['user' => $user->id]) }}" class="mt-6 space-y-6">
                        @csrf
                        @method('patch')

                        <div>
                            <x-input-label for="name" :value="__('Nome')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>
                        <div>
                            <x-input-label for="mensagem" :value="__('Mensagem')" />
                            <x-text-input id="mensagem" name="mensagem" type="text" class="mt-1 block w-full" :value="old('mensagem', $user->mensagem)" autofocus autocomplete="mensagem" />
                            <x-input-error class="mt-2" :messages="$errors->get('mensagem')" />
                        </div>
                        <div>
                            <x-input-label for="telefone" :value="__('Telefone')" />
                            <x-text-input id="telefone" name="telefone" type="text" class="mt-1 block w-full telefone" :value="old('telefone', $user->telefone)" required autofocus autocomplete="telefone" />
                            <x-input-error class="mt-2" :messages="$errors->get('telefone')" />
                        </div>
                        <div>
                            <x-input-label for="altura" :value="__('Altura')" />
                            <x-text-input id="altura" name="altura" type="text" class="mt-1 block w-full" :value="old('altura', $user->altura)" required autofocus autocomplete="altura" />
                            <x-input-error class="mt-2" :messages="$errors->get('altura')" />
                        </div>
                        
                        <div>
                            <x-input-label for="peso" :value="__('Peso')" />
                            <x-text-input id="peso" name="peso" type="text" class="mt-1 block w-full" :value="old('peso', $user->peso)" required autofocus autocomplete="peso" />
                            <x-input-error class="mt-2" :messages="$errors->get('peso')" />
                        </div>
                        
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Salvar') }}</x-primary-button>

                            @if (session('status') === 'profile-updated')
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-green-600 dark:text-green-400"
                                >{{ __('Salvo.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>