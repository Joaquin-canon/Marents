@extends('layouts.app')

@section('title', $categoria)

@section('banner')
    @include('components.banner', [
        'imagen' => $banner,
        'titulo' => $categoria
    ])
@endsection

@section('content')

<div class="max-w-7xl mx-auto py-10 px-4">

    {{-- TITULO --}}
    <h2 class="text-3xl font-bold mb-8 text-center">
        {{ $categoria }}
    </h2>

    <div class="mb-6 flex justify-center">
    <input type="text" placeholder="Buscar producto..."
        class="w-full md:w-1/2 px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-400">
</div>

    {{-- GRID PRODUCTOS --}}
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">

        @foreach ($productos as $producto)
            @include('components.product-card', [
                'imagen' => $producto['imagen'],
                'nombre' => $producto['nombre'],
                'tallas' => $producto['tallas'],
                'precio' => $producto['precio']
            ])
        @endforeach

    </div>

    {{-- PAGINACION --}}
    <div class="mt-10 flex justify-center">
        @include('components.pagination')
    </div>

</div>

@endsection