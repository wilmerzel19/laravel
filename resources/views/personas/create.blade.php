<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Registrar persona
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('personas.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 gap-6">
                            <app-input text="Nombre" id="nombre" required="true" />
                            <app-input text="Cedula" id="cedula" required="true" />
                            <app-input text="Telefono" id="telefono" required="true" />
                            <app-input text="sexo" id="sexo" required="true" />
                        </div>
                        <a href="{{ route('personas.index') }}"
                                class="text-white py-2 px-4 rounded-md font-semibold text-xs bg-indigo-700 hover:text-white">
                            <button>
                                Guardar
                            </button>
                            <!-- Crear un boton para regresar a la lista de personas -->
                            <a href="{{ route('personas.index') }}"
                                class="text-white py-2 px-4 rounded-md font-semibold text-xs bg-violet-700 hover:text-white">
                                REGREASAR
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
