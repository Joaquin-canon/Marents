@extends('layouts.app')

@section('title', 'Carrito')

@section('content')

<div class="min-h-screen bg-transparent text-black">

    <!-- HEADER -->
    <section class="border-b-[3px] border-black bg-white/90 backdrop-blur">
        <div class="max-w-7xl mx-auto px-6 py-14">
            <div class="flex gap-2 mb-6">
                <span class="w-12 h-3 bg-black block"></span>
                <span class="w-12 h-3 bg-marents-gold block"></span>
                <span class="w-12 h-3 bg-black block"></span>
            </div>

            <p class="uppercase tracking-[0.35em] text-sm font-black text-black/60 mb-4">
                Marents Checkout
            </p>

            <h1 class="text-5xl md:text-7xl font-black uppercase text-marents-gold leading-[0.9]">
                Tu carrito
            </h1>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-6">

            @if(empty($carrito) || count($carrito) === 0)

                <div class="bg-white border-[3px] border-black p-10 md:p-16 text-center shadow-[12px_12px_0_#EDE734]">
                    <h2 class="text-4xl md:text-6xl font-black uppercase text-marents-gold">
                        Carrito vacío
                    </h2>

                    <p class="mt-4 text-black/60 font-semibold">
                        Agrega productos para continuar con tu compra.
                    </p>

                    <a href="/categoria/hombre"
                       class="inline-block mt-8 bg-black text-white px-8 py-4 border-[3px] border-black font-black uppercase hover:bg-marents-gold hover:text-black transition">
                        Ver colección
                    </a>
                </div>

            @else

                @php $total = 0; @endphp

                <div class="grid lg:grid-cols-[1fr_380px] gap-10 items-start">

                    <!-- LISTA -->
                    <div class="space-y-5">

                        @foreach($carrito as $key => $item)

                            @php
                                $subtotal = $item['precio'] * $item['cantidad'];
                                $total += $subtotal;
                            @endphp

                            <div class="bg-white border-[3px] border-black group hover:shadow-[10px_10px_0_#EDE734] transition">

                                <div class="grid md:grid-cols-[180px_1fr]">

                                    <!-- IMAGEN -->
                                    <div class="bg-[#f5f5f5] border-b-[3px] md:border-b-0 md:border-r-[3px] border-black h-56 md:h-full flex items-center justify-center p-4">
                                        <img src="{{ asset('img/productos/'.$item['categoria'].'/'.$item['imagen']) }}"
                                             alt="{{ $item['nombre'] }}"
                                             class="max-h-44 object-contain group-hover:scale-105 transition duration-300">
                                    </div>

                                    <!-- INFO -->
                                    <div class="p-5 md:p-6">

                                        <div class="flex items-start justify-between gap-4">
                                            <div>
                                                <p class="text-[10px] uppercase tracking-[0.25em] text-black/50 font-black mb-2">
                                                    Marents Product
                                                </p>

                                                <h2 class="text-2xl md:text-3xl font-black uppercase leading-tight">
                                                    {{ $item['nombre'] }}
                                                </h2>
                                            </div>

                                            <form method="POST" action="{{ route('carrito.eliminar', $key) }}">
                                                @csrf
                                                <button class="bg-white border-[3px] border-black w-10 h-10 font-black hover:bg-black hover:text-white transition">
                                                    ✕
                                                </button>
                                            </form>
                                        </div>

                                        <div class="mt-5 flex flex-wrap gap-3">
                                            <span class="border-[3px] border-black px-3 py-2 text-xs font-black uppercase bg-white">
                                                Talla {{ $item['talla'] }}
                                            </span>

                                            <span class="border-[3px] border-black px-3 py-2 text-xs font-black uppercase bg-marents-gold">
                                                ${{ number_format($item['precio'], 0, ',', '.') }}
                                            </span>
                                        </div>

                                        <div class="mt-6 pt-5 border-t-[3px] border-black flex flex-col sm:flex-row gap-5 sm:items-end sm:justify-between">

                                            <form method="POST"
                                                  action="{{ route('carrito.actualizar', $key) }}"
                                                  class="space-y-2">
                                                @csrf

                                                <label class="block text-[10px] uppercase tracking-[0.25em] font-black text-black/50">
                                                    Cantidad
                                                </label>

                                                <input type="number"
                                                       name="cantidad"
                                                       value="{{ $item['cantidad'] }}"
                                                       min="1"
                                                       class="w-28 bg-white border-[3px] border-black px-3 py-2 text-center font-black focus:outline-none focus:border-marents-gold">
                                            </form>

                                            <div class="text-left sm:text-right">
                                                <p class="text-[10px] uppercase tracking-[0.25em] text-black/50 font-black">
                                                    Subtotal
                                                </p>

                                                <p class="text-3xl font-black text-black">
                                                    ${{ number_format($subtotal, 0, ',', '.') }}
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>

                    <!-- RESUMEN -->
                    <aside class="lg:sticky lg:top-28 bg-black text-white border-[3px] border-black p-6 shadow-[12px_12px_0_#EDE734]">

                        <p class="uppercase tracking-[0.3em] text-xs font-black text-white/50 mb-4">
                            Resumen
                        </p>

                        <h2 class="text-3xl md:text-4xl font-black uppercase text-marents-gold leading-tight mb-8">
                            Pedido
                        </h2>

                        <div class="space-y-5 font-semibold">

                            <div class="flex justify-between border-b-2 border-white/20 pb-4">
                                <span>Productos</span>
                                <span>{{ count($carrito) }}</span>
                            </div>

                            <div class="flex justify-between border-b-2 border-white/20 pb-4">
                                <span>Subtotal</span>
                                <span>${{ number_format($total, 0, ',', '.') }}</span>
                            </div>

                            <div class="flex justify-between border-b-2 border-white/20 pb-4">
                                <span>Envío</span>
                                <span class="text-marents-gold font-black">Gratis</span>
                            </div>

                            <div class="flex justify-between text-2xl font-black pt-2">
                                <span>Total</span>
                                <span>${{ number_format($total, 0, ',', '.') }}</span>
                            </div>

                        </div>

                        @auth
                            <a href="/checkout"
                               class="block text-center mt-8 bg-marents-gold text-black py-4 border-[3px] border-marents-gold font-black uppercase hover:bg-white hover:border-white transition">
                                Ir a pagar →
                            </a>
                        @endauth

                        @guest
                            <button onclick="abrirAuthModal()"
                                    class="w-full mt-8 bg-marents-gold text-black py-4 border-[3px] border-marents-gold font-black uppercase hover:bg-white hover:border-white transition">
                                Ir a pagar →
                            </button>
                        @endguest

                        <a href="/categoria/hombre"
                           class="block text-center mt-4 bg-black text-white py-4 border-[3px] border-white font-black uppercase hover:bg-white hover:text-black transition">
                            Seguir comprando
                        </a>

                    </aside>

                </div>

            @endif

        </div>
    </section>

</div>

<script>
document.querySelectorAll('input[name="cantidad"]').forEach(input => {
    input.addEventListener('change', function() {
        this.form.submit();
    });
});
</script>

@endsection