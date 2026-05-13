@extends('layouts.app')

@section('title', $producto->modelo->nombre)

@section('content')

@php
    $categoriaRuta = strtolower($producto->modelo->categoria->nombre);

    // Si tu carpeta se llama "pisa huevos" pero la categoría viene "Pisa Huevos"
    $categoriaRuta = str_replace(' ', ' ', $categoriaRuta);

    $img1 = $producto->imagenes->get(0)?->url ?? $producto->imagen?->url;
    $img2 = $producto->imagenes->get(1)?->url;

    $variacionBase = $producto->variaciones->where('stock', '>', 0)->first();
    $colorPrincipal = $variacionBase?->color;
    $colorSecundario = $variacionBase?->colorSecundario;

    $precio = $producto->variaciones->where('stock', '>', 0)->avg('precio');
@endphp

<div class="bg-transparent text-black min-h-screen">

    <section class="py-12 md:py-16">
        <div class="max-w-7xl mx-auto px-6">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">

                <!-- IMÁGENES PRODUCTO -->
                <div class="bg-white border-[3px] border-black p-6 md:p-10 shadow-[12px_12px_0_#EDE734] group">

                    <div class="relative bg-white border-[3px] border-black min-h-[440px] flex items-center justify-center p-6 overflow-hidden">

                        <!-- IMAGEN PRINCIPAL -->
                        <img 
                            src="{{ asset($img1 ? 'img/productos/' . $categoriaRuta . '/' . $img1 : 'img/default.png') }}"
                            alt="{{ $producto->modelo->nombre }}"
                            class="absolute max-h-[420px] object-contain transition duration-500 opacity-100 group-hover:opacity-0 group-hover:scale-105"
                            onerror="this.onerror=null; this.src='{{ asset('img/default.png') }}';"
                        >

                        <!-- IMAGEN HOVER -->
                        @if($img2)
                            <img 
                                src="{{ asset('img/productos/' . $categoriaRuta . '/' . $img2) }}"
                                alt="{{ $producto->modelo->nombre }}"
                                class="absolute max-h-[420px] object-contain transition duration-500 opacity-0 group-hover:opacity-100 group-hover:scale-105"
                                onerror="this.onerror=null; this.src='{{ asset('img/default.png') }}';"
                            >
                        @endif

                    </div>

                    @if($img2)
                        <p class="mt-5 text-center text-xs uppercase tracking-[0.25em] font-black text-black/50">
                            Pasa el mouse sobre la imagen
                        </p>
                    @endif

                </div>

                <!-- INFO PRODUCTO -->
                <div class="bg-white border-[3px] border-black p-6 md:p-8 shadow-[12px_12px_0_#000]">

                    <p class="uppercase tracking-[0.35em] text-xs font-black text-black/50 mb-4">
                        {{ $producto->modelo->categoria->nombre }}
                    </p>

                    <h1 class="text-5xl md:text-7xl font-black uppercase text-marents-gold leading-[0.9]">
                        {{ $producto->modelo->nombre }}
                    </h1>

                    <p class="mt-5 text-3xl font-black text-black">
                        ${{ number_format($precio ?? 0, 0, ',', '.') }}
                    </p>

                    @if($producto->descripcion)
                        <p class="mt-4 text-black/65 font-semibold leading-relaxed">
                            {{ $producto->descripcion }}
                        </p>
                    @endif

                    <form id="formProducto" method="POST" action="{{ route('carrito.agregar') }}" class="mt-8">
                        @csrf

                        <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                        <input type="hidden" name="talla" id="tallaSeleccionada" required>

                        <!-- COLORES REALES DEL PRODUCTO -->
                        <div class="border-t-[3px] border-black pt-6 mb-8">
                            <p class="text-xs uppercase tracking-[0.25em] font-black text-black/60 mb-4">
                                Color del producto
                            </p>

                            <div class="flex flex-wrap gap-3">

                                @if($colorPrincipal)
                                    <div class="flex items-center gap-2 border-[3px] border-black px-3 py-2 bg-white">
                                        <span class="w-7 h-7 border-[2px] border-black"
                                              style="background: {{ $colorPrincipal->hex ?? '#ddd' }}"></span>

                                        <span class="text-xs font-black uppercase">
                                            {{ $colorPrincipal->nombre }}
                                        </span>
                                    </div>
                                @endif

                                @if($colorSecundario)
                                    <div class="flex items-center gap-2 border-[3px] border-black px-3 py-2 bg-white">
                                        <span class="w-7 h-7 border-[2px] border-black"
                                              style="background: {{ $colorSecundario->hex ?? '#ddd' }}"></span>

                                        <span class="text-xs font-black uppercase">
                                            {{ $colorSecundario->nombre }}
                                        </span>
                                    </div>
                                @endif

                                @if(!$colorPrincipal && !$colorSecundario)
                                    <p class="text-sm font-semibold text-black/50">
                                        Color no disponible
                                    </p>
                                @endif

                            </div>
                        </div>

                        <!-- TALLAS -->
                        <div class="border-t-[3px] border-black pt-6">
                            <div class="flex items-center justify-between gap-4 mb-4">
                                <p class="text-xs uppercase tracking-[0.25em] font-black text-black/60">
                                    Selecciona la talla
                                </p>

                                <button type="button" onclick="toggleGuia()"
                                    class="text-xs font-black uppercase underline decoration-[3px] underline-offset-4 hover:text-marents-gold transition">
                                    Guía de tallas
                                </button>
                            </div>

                            <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 gap-3 mb-4">
                                @foreach($producto->variaciones as $v)
                                    <button type="button"
                                        data-stock="{{ $v->stock }}"
                                        data-talla="{{ $v->talla->numero }}"
                                        {{ $v->stock <= 0 ? 'disabled' : '' }}
                                        class="talla-btn border-[3px] border-black py-3 font-black transition-all duration-200
                                        {{ $v->stock <= 0 
                                            ? 'opacity-30 cursor-not-allowed bg-gray-100 text-black/40' 
                                            : 'bg-white text-black hover:bg-marents-gold hover:-translate-y-1 hover:shadow-[5px_5px_0_#000]' }}">

                                        {{ $v->talla->numero }}

                                        <span class="block text-[9px] font-semibold text-black/50">
                                            {{ $v->stock }} disponibles
                                        </span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        <!-- CANTIDAD -->
                        <div class="mt-8 border-t-[3px] border-black pt-6">
                            <p class="text-xs uppercase tracking-[0.25em] font-black text-black/60 mb-3">
                                Cantidad
                            </p>

                            <input type="number" name="cantidad" id="cantidad"
                                value="1" min="1"
                                class="w-28 px-3 py-3 border-[3px] border-black bg-white text-black font-black text-center focus:outline-none focus:border-marents-gold">
                        </div>

                        <!-- BOTÓN -->
                        <button type="submit"
                            class="w-full bg-black text-white py-4 border-[3px] border-black font-black uppercase transition-all duration-200 mt-8 hover:bg-marents-gold hover:text-black hover:shadow-[8px_8px_0_#000] active:bg-black active:text-marents-gold">
                            Agregar a la bolsa de compras
                        </button>
                    </form>

                </div>

            </div>

            <!-- GUÍA / VIDEO -->
            <div class="mt-20 grid md:grid-cols-2 gap-10 items-center bg-white border-[3px] border-black p-6 md:p-8 shadow-[12px_12px_0_#000]">

                <div>
                    <p class="uppercase tracking-[0.35em] text-xs font-black text-black/50 mb-4">
                        Guía Marents
                    </p>

                    <h2 class="text-4xl md:text-5xl font-black uppercase text-marents-gold leading-[0.9]">
                        ¿Cómo saber tu talla?
                    </h2>

                    <p class="text-black/70 font-semibold leading-relaxed mt-5 mb-6">
                        Paso 1: Coloca tu pie sobre una hoja de papel, pegado al piso. <BR>
                        Paso 2: Marca la punta de tu dedo más largo. <BR>
                        Paso 3: Mide la distancia desde el talón hasta la punta (en centímetros). <BR>
                        Paso 4: Compara tu medida con la tabla de abajo. <BR>
                        Tip: Mide ambos pies y usa la medida del más grande. <BR>
                        “Si tienes dudas sobre tu talla, escríbenos por WhatsApp y te asesoramos.” <BR>

                    </p>

                    <button onclick="toggleGuia()"
                        class="px-6 py-3 bg-black text-white border-[3px] border-black font-black uppercase hover:bg-marents-gold hover:text-black transition">
                        Ver guía de tallas
                    </button>
                </div>

                <div class="max-w-[300px] mx-auto border-[3px] border-black bg-black overflow-hidden">
                    <iframe 
                        class="w-full h-[520px]"
                        src="https://www.youtube-nocookie.com/embed/mAsl31kGkQM"
                        allowfullscreen>
                    </iframe>
                </div>

            </div>

        </div>
    </section>

</div>

<!-- MODAL GUÍA -->
<div id="guiaTallas"
     class="hidden fixed inset-0 bg-black/70 backdrop-blur-sm z-50 flex items-center justify-center p-4">

    <div class="bg-white w-full max-w-5xl border-[3px] border-black shadow-[12px_12px_0_#EDE734] overflow-hidden text-black">

        <div class="flex justify-between items-center px-6 py-4 border-b-[3px] border-black">
            <h2 class="text-2xl font-black uppercase text-marents-gold">Guía de tallas</h2>
            <button onclick="toggleGuia()" class="text-2xl font-black hover:text-marents-gold">✕</button>
        </div>

        <div class="p-6 overflow-x-auto">
            <table class="w-full text-sm text-center border-[3px] border-black">
                <thead class="bg-marents-gold text-black">
                    <tr>
                        <th class="p-3 border-[2px] border-black">EU</th>
                        <th class="p-3 border-[2px] border-black">US</th>
                        <th class="p-3 border-[2px] border-black">CM</th>
                    </tr>
                </thead>

                <tbody>
                    @for ($i = 35; $i <= 45; $i++)
                        <tr>
                            <td class="p-3 border-[2px] border-black font-black">{{ $i }}</td>
                            <td class="p-3 border-[2px] border-black">{{ round(($i - 33) * 0.5 + 4, 1) }}</td>
                            <td class="p-3 border-[2px] border-black">{{ number_format(22 + ($i - 35) * 0.7, 1) }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>

    </div>
</div>

<!-- TOAST -->
<div id="toast"
     class="fixed inset-0 flex items-center justify-center z-50 hidden">

    <div id="toastContent"
         class="bg-black text-white px-8 py-4 border-[3px] border-black shadow-[10px_10px_0_#EDE734] text-center text-sm font-black uppercase">
    </div>

</div>

<script>
function toggleGuia() {
    const modal = document.getElementById('guiaTallas');
    if (modal) modal.classList.toggle('hidden');
}

function showToast(message, isError = false) {
    const toast = document.getElementById('toast');
    const content = document.getElementById('toastContent');

    if (!toast || !content) return;

    content.textContent = message;

    content.classList.remove('bg-black', 'bg-red-600', 'text-white', 'text-black', 'bg-marents-gold');

    if (isError) {
        content.classList.add('bg-red-600', 'text-white');
    } else {
        content.classList.add('bg-black', 'text-white');
    }

    toast.classList.remove('hidden');

    setTimeout(() => {
        toast.classList.add('hidden');
    }, 2200);
}

document.addEventListener('DOMContentLoaded', () => {
    const tallaBtns = document.querySelectorAll('.talla-btn');
    const tallaInput = document.getElementById('tallaSeleccionada');
    const form = document.getElementById('formProducto');
    const cantidad = document.getElementById('cantidad');

    tallaBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            tallaBtns.forEach(b => {
                b.classList.remove(
                    'bg-black',
                    'text-white',
                    'shadow-[5px_5px_0_#EDE734]'
                );

                if (!b.disabled) {
                    b.classList.add('bg-white', 'text-black');
                }
            });

            btn.classList.remove('bg-white', 'text-black');
            btn.classList.add('bg-black', 'text-white', 'shadow-[5px_5px_0_#EDE734]');

            tallaInput.value = btn.dataset.talla;

            const stock = parseInt(btn.dataset.stock || '1');
            cantidad.max = stock;

            if (parseInt(cantidad.value || '1') > stock) {
                cantidad.value = stock;
            }
        });
    });

    if (form) {
        form.addEventListener('submit', (e) => {
            if (!tallaInput.value) {
                e.preventDefault();
                showToast('Selecciona una talla primero', true);
            }
        });
    }
});
</script>

@if(session('success'))
<script>
document.addEventListener('DOMContentLoaded', function () {
    showToast("{{ session('success') }}");
});
</script>
@endif

@if(session('error'))
<script>
document.addEventListener('DOMContentLoaded', function () {
    showToast("{{ session('error') }}", true);
});
</script>
@endif

@endsection