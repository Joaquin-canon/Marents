@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto py-10 px-4">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

        <!-- GALERIA -->
        <div class="flex gap-4">

            <!-- MINIATURAS -->
            <div class="flex flex-col gap-3">
                @foreach($imagenes as $img)
                    <img src="{{ asset($img) }}"
                         class="w-16 h-16 object-cover border rounded cursor-pointer hover:scale-105 transition">
                @endforeach
            </div>

            <!-- IMAGEN PRINCIPAL -->
            <div class="flex-1 bg-gray-100 rounded-xl flex items-center justify-center">

                <img src="{{ asset($imagenes[0]) }}"
                     class="max-h-[400px] object-contain">

            </div>

        </div>

        <!-- INFO PRODUCTO -->
        <div class="space-y-6">

            <!-- NOMBRE -->
            <h1 class="text-2xl font-bold">
                {{ $producto->modelo->nombre }}
            </h1>

            <!-- CATEGORIA -->
            <p class="text-gray-500">
                {{ $producto->modelo->categoria->nombre }}
            </p>

            <!-- PRECIO -->
            <div class="flex items-center gap-3">

                <span class="text-xl font-bold">
                    ${{ number_format($precio, 0, ',', '.') }}
                </span>

                @if($descuento)
                    <span class="line-through text-gray-400">
                        ${{ number_format($precio_original, 0, ',', '.') }}
                    </span>

                    <span class="text-green-600 font-semibold">
                        {{ $descuento }}% de descuento
                    </span>
                @endif

            </div>

            <!-- COLORES -->
            <div>
                <p class="text-sm font-semibold mb-2">
                    Color
                </p>

                <div class="flex gap-2">
                    @foreach($colores as $color)
                        <div class="w-6 h-6 rounded-full border cursor-pointer"
                             style="background: {{ $color->hex }}">
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- TALLAS -->
            <div>
                <p class="text-sm font-semibold mb-2">
                    Selecciona la talla
                </p>

                <div class="flex flex-wrap gap-2">

                    @foreach($tallas as $talla)
                        <button
                            class="px-4 py-2 border rounded hover:bg-black hover:text-white transition">
                            {{ $talla }}
                        </button>
                    @endforeach

                </div>
            </div>

            <!-- BOTON -->
            <button
                class="w-full bg-black text-white py-3 rounded-full text-sm font-semibold hover:bg-gray-900 transition">
                Agregar a la bolsa de compras
            </button>

            <!-- ENVIO -->
            <div class="text-sm text-gray-500">
                <p class="font-semibold">Envío*</p>
                <p>Para obtener información precisa de envío</p>
                <p class="underline cursor-pointer">Editar ubicación</p>
            </div>

        </div>

    </div>

</div>

@endsection