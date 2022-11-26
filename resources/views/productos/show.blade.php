<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Detalles de los productos
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
                                       Estas seguro que deseas eliminar a: {{ $producto->Imagen }} {{ $producto->nombre }} {{ $producto->color }} {{ $producto->no_tenis}}?
                                    </p>

                                </div>
                            </div>
                            <div class="flex">
                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                    class="w-24 p-2 text-center text-white bg-red-800 rounded-lg hover:text-red-100">Si</button>
                                </form>
                                    <a href="{{ route('productos.index') }}"
                                    class="w-24 p-2 ml-4 text-center text-white bg-gray-800 rounded-lg hover:text-red-100">No</a>
                            </div>
                        </div>
                    @endif
                        <!-- mostrar los detalles del as personas -->
                        <div class="grid grid-cols-1 gap-2 sm:grip-cols-2">
                            <x-app-show text="imagen" valor="{{ $producto->imagen }}" />
                            <x-app-show text="nombre" valor="{{ $producto->nombre }}" />
                            <x-app-show text="color" valor="{{ $producto->color }}" />
                                <x-app-show text="no_tenis" valor="{{ $tarjeta->no_tenis}}" />

                            </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>