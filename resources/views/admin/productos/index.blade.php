@extends('layouts.admin')

@section('content')

{{-- 🔥 HEADER --}}
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Productos</h1>
</div>

{{-- 🔥 BOTONES --}}
<div class="flex gap-3 mb-6">

    <button id="btnStockGlobal"
        class="bg-gray-700 text-white px-5 py-2 rounded-lg shadow hover:bg-gray-800 transition">
        + Gestionar existencias
    </button>

    <button id="btnNuevoProducto"
        class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow hover:bg-blue-700 transition">
        + Nuevo producto
    </button>

</div>

{{-- 🔍 FILTROS --}}
<div class="bg-white rounded-xl shadow p-4 mb-6 flex flex-wrap gap-4">

    <input type="text" id="buscar"
        placeholder="Buscar producto..."
        class="border rounded-lg px-3 py-2 w-64">

    <select id="filtroCategoria" class="border rounded-lg px-3 py-2">
        <option value="">Todas las categorías</option>
        <option value="Caballero">Caballero</option>
        <option value="Dama">Dama</option>
        <option value="Niño">Niño</option>
    </select>  

    <select id="filtroStock" class="border rounded-lg px-3 py-2">
        <option value="">Todo el stock</option>
        <option value="bajo">Stock bajo</option>
        <option value="alto">Stock alto</option>
    </select>

</div>

{{-- 🔥 TABLA --}}
<div class="bg-white rounded-xl shadow p-6 overflow-x-auto">

    <table id="tabla-productos" class="w-full text-sm">

        <thead class="text-gray-500 border-b">
            <tr>
                <th class="py-3 text-center">ID</th>
                <th class="text-center">Imagen</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Categoría</th>
                <th class="text-center">Talla</th>
                <th class="text-center">Color primario</th>
                <th class="text-center">Color secundario</th>
                <th class="text-center">Stock</th>
                <th class="text-center">Costo</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Desc.</th>
                <th class="text-center">Ganancia</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
<tbody>

@foreach($productos as $producto)

@php
    $variaciones = $producto->variaciones;
@endphp

<tr class="border-t hover:bg-gray-50">

    {{-- ID --}}
    <td class="text-center">{{ $producto->id }}</td>

    {{-- IMG --}}
    <td class="text-center">
        <img src="{{ $producto->imagen ? asset($producto->imagen->url) : '/img/default.png' }}"
             class="table-img">
    </td>

    {{-- NOMBRE --}}
    <td class="text-center font-semibold">
        {{ $producto->modelo->nombre }}
    </td>

    {{-- CATEGORIA --}}
    <td class="text-center">
        {{ $producto->modelo->categoria->nombre }}
    </td>

    {{-- 🔥 TALLAS TIPO NIKE --}}
    <td class="text-center">
        <div class="flex flex-wrap gap-2 justify-center">

            @foreach($variaciones as $v)

                <span
                    class="px-2 py-1 rounded text-xs font-semibold
                    {{ $v->stock == 0 
                        ? 'bg-gray-100 text-gray-400 line-through' 
                        : 'bg-green-100 text-green-700' }}">

                    {{ $v->talla->numero }}
                    ({{ $v->stock }})

                </span>

            @endforeach

        </div>
    </td>

    {{-- 🔥 COLORES ÚNICOS --}}
    <td class="text-center">
        <div class="flex gap-2 justify-center">

            @php
                $colores = [];
            @endphp

            @foreach($variaciones as $v)

                @if(!in_array($v->colorPrimario->nombre, $colores))
                    @php $colores[] = $v->colorPrimario->nombre; @endphp

                    <span
                    class="w-4 h-4 rounded-full border"
                    style="background: {{ $v->colorPrimario->nombre }};">
                </span>
                @endif

                @if($v->colorSecundario && !in_array($v->colorSecundario->nombre, $colores))
                    @php $colores[] = $v->colorSecundario->nombre; @endphp

                    <span
                        class="w-4 h-4 rounded-full border"
                        style="background: {{ $v->colorSecundario->nombre }};">
                    </span>
                    </span>
                @endif

            @endforeach

        </div>
    </td>

    {{-- 🔥 STOCK TOTAL --}}
    <td class="text-center font-bold text-green-600">
        {{ $variaciones->sum('stock') }}
    </td>

    {{-- 🔥 COSTO PROMEDIO --}}
    <td class="text-center">
        ${{ number_format($variaciones->avg('costo'), 0, ',', '.') }}
    </td>

    {{-- 🔥 PRECIO PROMEDIO --}}
    <td class="text-center">
        ${{ number_format($variaciones->avg('precio'), 0, ',', '.') }}
    </td>

    {{-- 🔥 DESC --}}
    <td class="text-center text-red-500">
        -
    </td>

    {{-- 🔥 GANANCIA --}}
    <td class="text-center text-green-600 font-bold">
        ${{ number_format(
            $variaciones->avg('precio') - $variaciones->avg('costo'),
            0, ',', '.'
        ) }}
    </td>

    {{-- ACCIONES --}}
    <td class="text-center">
        <button class="btn-stock bg-gray-200 px-2 py-1 rounded text-xs"
            data-id="{{ $producto->id }}">
            Gestionar
        </button>
    </td>

</tr>

@endforeach

</tbody>

    </table>

</div>

{{-- 🔥 MODAL IMAGEN --}}
<div id="modalImagen"
     class="fixed inset-0 bg-black/80 backdrop-blur hidden items-center justify-center z-50">

    <img id="imagenGrande"
         class="max-h-[80vh] rounded-xl shadow-2xl">

</div>

{{-- 🔥 MODALES --}}
@include('admin.productos.modal-create')
@include('admin.productos.modal-stock-global')
@include('admin.productos.modal-stock-producto')

@endsection


@push('scripts')
<script>

$(document).ready(function () {

    let tabla = $('#tabla-productos').DataTable({
        pageLength: 5,
        responsive: false,
        autoWidth: false,
        scrollX: true,
        ordering: true,
        language: {
            search: "Buscar:",
            lengthMenu: "Mostrar _MENU_",
            info: "Mostrando _START_ a _END_ de _TOTAL_ productos",
        }
    });

    $('#buscar').on('keyup', function () {
        tabla.search(this.value).draw();
    });

    $('#filtroCategoria').on('change', function () {
        tabla.column(2).search(this.value).draw();
    });

    $('#filtroStock').on('change', function () {
        let val = this.value;

        if (val === 'bajo') {
            tabla.column(4).search('^[1-5]$', true, false).draw();
        } else if (val === 'alto') {
            tabla.column(4).search('^[6-9]|[1-9][0-9]', true, false).draw();
        } else {
            tabla.column(4).search('').draw();
        }
    });

});

</script>
@endpush