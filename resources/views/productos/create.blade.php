<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Registrar Producto
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('productos.store') }}" method="POST">

                        @csrf

                        <div class="grid grid-cols-1 gap-6">
                            <app-input text="imagen" valor="{{ old('imagen') }}" required="true" id="imagen" />
                            <app-input text="nombre" valor="{{ old('nombre') }}" required="true" id="nombre"/>
                            <app-input text="color" valor="{{ old('color') }}" required="true" id="color"/>

                            <app-input text="no_tenis" valor="{{ old('no_tenis') }}" required="true" id="no_tenis" />

                        </div>

                        <div class="mt-2">
                            <button>
                                Guardar
                            </button>

                            <!-- Crear un boton para regresar a la lista de personas -->
                            <a href="{{ route('productos.index') }}"
                                class="px-4 py-2 text-xs font-semibold text-white bg-orange-500 rounded-md hover:text-white">
                                REGREASAR
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>