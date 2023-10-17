<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Usuários') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 shadow-md text-gray-900 dark:text-gray-100">
                    <div class="mb-4 text-right">
                        <a href="{{ route('users.create') }}" class=" btn btn-success">+ Usuário</a>
                    </div>
                    <table class="w-full bg-white text-left dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg table-fixed">
                        <thead class="uppercase p-6 text-gray-900 dark:text-gray-100">
                            <tr class="p-6 space-x-4 text-gray-900 dark:text-gray-100">
                                <th scope="col" class="p-6 text-gray-900 dark:text-gray-100">Nome</th>
                                <th scope="col" class="p-6 text-gray-900 dark:text-gray-100">Email</th>
                                <th scope="col" class="p-6 text-gray-900 dark:text-gray-100">Altura (CM)</th>
                                <th scope="col" class="p-6 text-gray-900 dark:text-gray-100">Peso (KG)</th>
                                <th scope="col" class="p-6 text-gray-900 dark:text-gray-100">IMC</th>
                                <th scope="col" class="p-6 text-gray-900 dark:text-gray-100 text-right" width="280px">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            @foreach ($users as $user)
                                <tr class="border-b p-6 text-gray-700 dark:text-gray-100 dark:border-gray-700">
                                    <td scope="row" class="p-6 text-gray-900 whitespace-nowrap dark:text-white">{{ $user->name }}</td>
                                    <td scope="row" class="p-6 text-gray-900 whitespace-nowrap dark:text-white">{{ $user->email }}</td>
                                    <td scope="row" class="p-6 text-gray-900 whitespace-nowrap dark:text-white">{{ $user->altura}}</td>
                                    <td scope="row" class="p-6 text-gray-900 whitespace-nowrap dark:text-white">{{ $user->peso }}</td>
                                    <td class="p-6 text-gray-900 whitespace-nowrap dark:text-white">
                                    @if ($user->altura && $user->peso)    
                                        @php
                                        $alturaCentimetros = $user->altura; // Supomos que a altura está em centímetros
                                        $alturaMetros = $alturaCentimetros / 100; // Converter para metros
                                        $imc = $user->peso / ($alturaMetros * $alturaMetros);
                                        $imcFormatted = number_format($imc, 2);
                                        @endphp
                                   
                                        {{ $imcFormatted }}
                                    @else
                                        Não há dados suficientes para calcular o IMC.
                                    @endif
                                    </td>
                                    <td class="p-6 text-gray-900 whitespace-nowrap dark:text-white text-right">
                                        <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                           
                                            <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Ver</a>
                            
                                            <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Editar</a>
                           
                                            @csrf
                                            @method('DELETE')
                              
                                            <button type="submit" class="btn btn-danger">Deletar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   
</x-app-layout>