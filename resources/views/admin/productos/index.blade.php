@extends('layouts.admin')

@section('content')

{{-- 🔥 HEADER --}}
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Productos</h1>

    <button onclick="abrirModal()"
        class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition">
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
                <th class="py-3 text-center">Imagen</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Categoría</th>
                <th class="text-center">Color</th>
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
            $variacion = $producto->variaciones->first();
        @endphp

        <tr class="border-t hover:bg-gray-50 align-middle">

            {{-- IMG --}}
            <td class="py-3 text-center">
                <img src="{{ $producto->imagen ? asset($producto->imagen->url) : '/img/default.png' }}"
                     onclick="verImagen(this.src)"
                     class="table-img cursor-pointer hover:scale-110 transition">
            </td>

            {{-- NOMBRE --}}
            <td class="py-3 text-center">
                {{ $producto->modelo->nombre ?? 'N/A' }}
            </td>

            {{-- CATEGORIA --}}
            <td class="py-3 text-center">
                {{ $producto->modelo->categoria->nombre ?? 'N/A' }}
            </td>

            {{-- COLOR --}}
            <td class="py-3 text-center">
                {{ $variacion->color->nombre ?? '-' }}
            </td>

            {{-- STOCK --}}
            <td class="py-3 text-green-600 font-semibold text-center">
                {{ $variacion->stock ?? 0 }}
            </td>

            {{-- COSTO --}}
            <td class="py-3 text-gray-500 text-center">
                ${{ number_format($variacion->costo ?? 0, 0, ',', '.') }}
            </td>

            {{-- PRECIO --}}
            <td class="py-3 text-center">
                ${{ number_format($variacion->precio ?? 0, 0, ',', '.') }}
            </td>

            {{-- DESCUENTO --}}
            <td class="py-3 text-red-500 font-semibold text-center">
                @if($variacion && $variacion->tiene_descuento)
                    -${{ number_format($variacion->valor_descuento, 0, ',', '.') }}
                @else
                    -
                @endif
            </td>

            {{-- GANANCIA --}}
            <td class="py-3 text-green-600 font-bold text-center">
                @php
                    $precioFinal = ($variacion && $variacion->tiene_descuento)
                        ? $variacion->precio - $variacion->valor_descuento
                        : $variacion->precio;

                    $ganancia = $precioFinal - ($variacion->costo ?? 0);
                @endphp

                ${{ number_format($ganancia, 0, ',', '.') }}
            </td>

            {{-- ACCIONES --}}
            <td class="py-3">
                <div class="table-actions">
                    <button class="bg-gray-200 px-2 py-1 rounded text-xs">Gestionar</button>
                    <button class="bg-blue-500 text-white px-2 py-1 rounded text-xs">Editar</button>
                    <button class="bg-red-500 text-white px-2 py-1 rounded text-xs">Eliminar</button>
                </div>
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


{{-- 🔥 MODAL CREAR PRODUCTO --}}
@include('admin.productos.modal-create')


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

// 🔥 MODAL FUNCIONES (FUERA DEL READY)
function abrirModal() {
    const modal = document.getElementById('modalProducto');
    if (!modal) return;

    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function cerrarModal() {
    const modal = document.getElementById('modalProducto');
    if (!modal) return;

    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

</script>
@endpush