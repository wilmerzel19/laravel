<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <span class="text-xl font-semibold leading-tight text-indigo-800">
            Lista de Clientes
            </span>
            <a href="{{ route('personas.create') }}"
            class="p-2 text-center text-white bg-violet-600 rounded-md hover:text-black-100">
                 <!-- incluir un icono en formato svg: plus -->
                <svg class="inline w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                    Crear Nuevo
        </a>
     </div>

    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- Add a search bar -->
            @php
                $search = isset($_GET['search']) ? $_GET['search'] : '';
            @endphp
            <div class="flex justify-between">
                <div class="w-full">
                    <div class="flex justify-between p-2 mb-5 bg-white rounded-lg">
                        <div class="w-full">
                            <form action="{{ route('personas.index') }}" method="GET">
                                <div class="flex items-center">
                                    <input class="w-full px-2 py-2 mr-3 leading-tight text-gray-700 bg-transparent border-none appearance-none focus:outline-none" type="text" placeholder="Buscar" name="search" value="{{ $search }}">
                                    <button class="flex-shrink-0 px-2 py-1 text-sm text-white bg-blue-500 border-4 border-blue-500 rounded-md hover:bg-blue-700 hover:border-blue-700" type="submit">
                                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            
           
                <div class="p-6 bg-white ">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="text-left border-b-2 border-violet-700">
                                <th class="px-4 py-3">Nombre</th>
                                <th class="px-4 py-3">Cedula</th>
                                <th class="px-4 py-3">Telefono</th>
                                <th class="px-4 py-3">Sexo</th>
                                <th class="px-4 py-3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personas as $persona)
                                <tr class="border-b border-gray-200">
                                    <td class="px-4 py-3">{{ $persona->nombre }}</td>
                                    <td class="px-4 py-3">{{ $persona->cedula }}</td>
                                    <td class="px-4 py-3">{{ $persona->telefono }}</td>
                                    <td class="px-4 py-3">{{ $persona->sexo }}</td>
                                    <td class="px-4 py-3">
                                        <a href="{{ route('personas.edit', $persona->id) }}"
                                            class="px-4 py-2 text-xs font-semibold text-white bg-violet-700 rounded-md hover:text-white">
                                            Editar
                                        </a>
                                        <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit transition duration-150 ease-in-out ..."
                                                class="px-4 py-2 text-xs font-semibold text-white bg-black rounded-md hover:text-white">
                                                Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $personas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
        