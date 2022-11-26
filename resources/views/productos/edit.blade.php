<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Editar datos de un producto
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 gap-6">
                            <x-app-input text="imagen" valor="{{ $producto->imagen}}" id="imagen" required="true" />
                            <x-app-input text="nombre" valor="{{ $producto->nombre}}" id="nombre" required="true" />
                            <x-app-input text="color" valor="{{ $producto->color}}" id="color" required="true" />
                            <x-app-input text="no_tenis" valor="{{ $producto->no_tenis}}" id="no_tenis"
                                required="true" />
                        </div>
                        <div class="mt-2">
                            <x-button>
                                Guardar
                            </x-button>

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
</x-app-layout>