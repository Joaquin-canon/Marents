<div id="modalStockProducto"
     class="modal fixed inset-0 bg-black/70 hidden items-center justify-center z-50">

    <div class="bg-white w-full max-w-md rounded-xl p-6">

        <h2 class="text-lg font-bold mb-4">Agregar stock</h2>

        <form method="POST" action="/admin/stock/producto">
            @csrf

            {{-- PRODUCTO --}}
            <input type="hidden" id="producto_id" name="producto_id">

            {{-- TALLA --}}
            <select name="talla_id" class="border p-2 rounded w-full mb-3">
                <option value="">Seleccionar talla</option>

                @foreach($tallas as $t)
                    <option value="{{ $t->id }}">{{ $t->numero }}</option>
                @endforeach
            </select>

            {{-- CANTIDAD --}}
            <input type="number" name="cantidad"
                placeholder="Cantidad"
                class="border p-2 rounded w-full">

            {{-- BOTONES --}}
            <div class="flex justify-end mt-4 gap-2">

                <button type="button"
                    class="cerrarModal bg-gray-200 px-3 py-2 rounded">
                    Cancelar
                </button>

                <button type="submit"
                    class="bg-green-600 text-white px-4 py-2 rounded">
                    Agregar
                </button>

            </div>

        </form>

    </div>
</div>