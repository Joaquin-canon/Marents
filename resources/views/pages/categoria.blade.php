@extends('layouts.app')

@section('title', $categoria)

@section('banner')
    @include('components.banner', [
        'imagen' => $banner,
        'titulo' => $categoria
    ])
@endsection

@section('content')

<div class="bg-white text-black">

    <!-- HEADER CATEGORÍA -->
    <section class="border-b-[3px] border-black bg-[#f5f5f5]">
        <div class="max-w-7xl mx-auto px-6 py-14">

            <div class="flex gap-2 mb-6 justify-center">
                <span class="w-12 h-3 bg-black block"></span>
                <span class="w-12 h-3 bg-marents-gold block"></span>
                <span class="w-12 h-3 bg-black block"></span>
            </div>

            <p class="text-center uppercase tracking-[0.35em] text-sm font-black text-black/60 mb-4">
                Categoría
            </p>

            <h2 class="text-5xl md:text-7xl font-black uppercase text-center text-marents-gold leading-[0.9]">
                {{ $categoria }}
            </h2>

        </div>
    </section>

    <!-- BUSCADOR -->
    <section class="border-b-[3px] border-black bg-white">
        <div class="max-w-7xl mx-auto px-6 py-8">

            <div class="max-w-2xl mx-auto">
                <input type="text"
                       placeholder="Buscar producto..."
                       class="w-full px-5 py-4 border-[3px] border-black bg-white text-black font-semibold uppercase tracking-wide placeholder:text-black/40 focus:outline-none focus:ring-0 focus:border-marents-gold transition">
            </div>

        </div>
    </section>

    <!-- PRODUCTOS -->
    <section class="py-14 bg-[#f5f5f5]">
        <div class="max-w-7xl mx-auto px-6">

            @if($productos->isEmpty())
                <div class="border-[3px] border-black bg-white py-20 text-center">
                    <h3 class="text-3xl font-black uppercase text-marents-gold">
                        No hay productos disponibles
                    </h3>

                    <p class="mt-3 text-black/60 font-semibold">
                        Pronto agregaremos nuevos productos a esta categoría.
                    </p>
                </div>
            @endif

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">

                @foreach ($productos as $producto)

                    @php
                        $variacionPrincipal = $producto->variaciones->where('stock', '>', 0)->first();
                    @endphp

                    @include('components.product-card', [
                        'id' => $producto->id,

                        'imagen' => $producto->imagenes->get(0)?->url,
                        'imagen_hover' => $producto->imagenes->get(1)?->url,

                        'nombre' => $producto->modelo->nombre,

                        'tallas' => $producto->variaciones
                                        ->where('stock', '>', 0)
                                        ->pluck('talla.numero')
                                        ->unique()
                                        ->implode(','),

                        'precio' => $producto->variaciones
                                        ->where('stock', '>', 0)
                                        ->avg('precio'),

                        'categoria' => strtolower($producto->modelo->categoria->nombre),

                        'color1' => $variacionPrincipal?->color?->nombre,
                        'color2' => $variacionPrincipal?->colorSecundario?->nombre,
                        'color1_hex' => $variacionPrincipal?->color?->hex,
                        'color2_hex' => $variacionPrincipal?->colorSecundario?->hex,
                    ])

                @endforeach

            </div>

        </div>
    </section>

</div>

@endsection