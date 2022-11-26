<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <span class="text-xl font-semibold leading-tight text-indigo-800">
            Lista de Productos
            </span>
            <a href="{{ route('productos.create') }}"
            class="p-2 text-center text-white bg-black rounded-md hover:text-blue-100">
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
                    <div class="flex justify-between p-4 mb-2 bg-white rounded-lg">
                        <div class="w-full">
                            <form action="{{ route('productos.index') }}" method="GET">
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
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Mostrar en una tabla la lista de  tarjeta
                    -->
                <table class="w-full">
                    <thead>
                        <tr>
                            <tr class="text-left border-b-2 border-violet-700">
                            <th class="px-4 py-2">Imagen</th>
                            <th class="px-4 py-2">Nombre</th>
                            <th class="px-4 py-2">Color</th>

                            <th class="px-4 py-2">No_tenis</th>

                            <th class="px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td class="px-4 py-2 border">{{ $producto->imagen }}</td>
                                <td class="px-4 py-2 border">{{ $producto->nombre}}</td>
                                <td class="px-4 py-2 border">{{ $producto->color }}</td>

                                <td class="px-4 py-2 border">{{ $producto->no_tenis }}</td>



                                <td class="px-4 py-2 border">{{ $producto->actiones }}
                                    <a href="{{ route('productos.edit', $producto->id) }}"
                                        class="px-4 py-2 text-xs font-semibold text-white bg-violet-700 rounded-md hover:text-white">Editar</a>
                                   <a href="{{ route('productos.show', ["producto" => $producto->id, "confirmar_eliminado" => 1]) }}"
                                        class="px-4 py-2 text-xs font-semibold text-white bg-black rounded-md hover:text-white">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <hr class="m-4">
                {{
                    $productos->links()
                 }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
