<div id="modalStockGlobal"
     class="modal fixed inset-0 bg-black/70 backdrop-blur hidden items-center justify-center z-50">

    <div class="bg-white w-full max-w-2xl rounded-2xl p-6 shadow-2xl">

        {{-- HEADER --}}
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold">Gestión de existencias</h2>

            <button class="cerrarModal text-gray-400 text-xl">✕</button>
        </div>

        <form method="POST" action="/admin/stock">
            @csrf

            <div class="grid grid-cols-2 gap-4">

                {{-- CATEGORIA --}}
                <select id="selectCategoria" class="border p-2 rounded">
                    <option value="">Categoría</option>
                    @foreach($categorias as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                    @endforeach
                </select>

                {{-- PRODUCTO --}}
                <select id="selectModelo" name="modelo_id" class="border p-2 rounded">
                    <option value="">Producto</option>
                </select>

                {{-- TALLA --}}
                <td class="text-center">
    <div class="flex flex-wrap gap-2 justify-center">

        @foreach($producto->variaciones as $v)

            <button
                class="px-3 py-1 rounded border text-xs font-semibold
                {{ $v->stock == 0 
                    ? 'bg-gray-100 text-gray-400 line-through cursor-not-allowed' 
                    : 'bg-white hover:bg-gray-100 border-gray-300' }}">

                {{ $v->talla->numero }}

                <span class="ml-1 text-[10px] text-gray-500">
                    ({{ $v->stock }})
                </span>

            </button>

        @endforeach

    </div>
</td>

                {{-- CANTIDAD --}}
                <input type="number" name="cantidad"
                    class="border p-2 rounded"
                    placeholder="Cantidad">

            </div>

            {{-- 🔥 INFO PRODUCTO --}}
            <div id="infoProducto"
                 class="mt-6 p-4 bg-gray-50 rounded-lg hidden">

                <div class="flex gap-4 items-center">

                    <img id="imgProducto"
                         class="w-16 h-16 object-contain rounded">

                    <div>

                        <p class="text-sm text-gray-500">Colores</p>

                        <div id="colores" class="flex gap-2 mt-1"></div>

                        <p id="estadoStock"
                           class="text-xs text-gray-500 mt-2"></p>

                    </div>

                </div>

            </div>

            {{-- BOTONES --}}
            <div class="flex justify-end mt-6 gap-2">
                <button type="button" class="cerrarModal bg-gray-200 px-3 py-2 rounded">
                    Cancelar
                </button>

                <button class="bg-green-600 text-white px-4 py-2 rounded">
                    Guardar
                </button>
            </div>

        </form>

    </div>
</div>