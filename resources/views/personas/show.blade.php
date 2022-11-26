<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Detalles de la persona
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Crear una ventana modal para confirmar si desea eliminar -->
                    @if (isset($_GET['confirmar_eliminado']))
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">

                                <div class="ml-3">
                                    <p class="text-sm font-bold leading-5 text-red-500">
                                        Estas seguro que deseas eliminar a: {{ $persona->nombre }}
                                        {{ $persona->cedula }} {{ $persona->telefono }} {{ $persona->sexo }}?
                                    </p>

                                </div>
                            </div>
                            <div class="flex">
                                <form action="{{ route('personas.destroy', $persona->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="w-24 p-2 text-center text-white bg-red-800 rounded-lg hover:text-red-100">Si</button>
                                </form>
                                <a href="{{ route('personas.index') }}"
                                    class="w-24 p-2 ml-4 text-center text-white bg-gray-800 rounded-lg hover:text-red-100">No</a>
                            </div>
                        </div>
                    @endif
                    <!-- mostrar los detalles del as personas -->
                    <div class="grid grid-cols-1 gap-2 sm:grip-cols-2">
                        <app-show text="Nombre" valor="{{ $persona->nombre }}" />
                        <app-show text="Cedula" valor="{{ $persona->cedula }}" />
                        <app-show text="Telefono" valor="{{ $persona->telefono }}" />
                        <app-show text="Sexo" valor="{{ $persona->sexo }}" />

                    </div>
                    <div class="mt-2">
                        <a href="{{ route('personas.edit', $persona->id) }}"
                            class="text-white py-2 px-4 rounded-md font-semibold text-xs bg-orange-500 hover:text-white">
                            Editar
                        </a>
                        
                        <a href="{{ route('personas.index') }}"
                            class="text-white py-2 px-4 rounded-md font-semibold text-xs bg-orange-500 hover:text-white">
                            REGREASAR
                        </a>
                    </div>
                </div>

            </div>
        </div>
</x-app-layout>
