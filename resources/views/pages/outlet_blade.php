@extends('layouts.app')

@section('title', 'Outlet Marents')

@section('content')

<section class="bg-[#f8f5ef] text-black overflow-hidden">

    <!-- ========================================= -->
    <!-- HERO OUTLET -->
    <!-- ========================================= -->

    <section class="relative overflow-hidden border-b-[3px] border-black">

        {{-- FONDO --}}
        <div class="absolute inset-0
            bg-[linear-gradient(to_right,rgba(0,0,0,.05)_1px,transparent_1px),
            linear-gradient(to_bottom,rgba(0,0,0,.05)_1px,transparent_1px)]
            bg-[size:40px_40px]">
        </div>

        {{-- GLOW --}}
        <div class="absolute -top-32 -right-32 w-[450px] h-[450px]
                    bg-red-500/20 rounded-full blur-[120px]">
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-24 lg:py-32">

            <div class="grid lg:grid-cols-2 gap-16 items-center">

                {{-- TEXTO --}}
                <div class="scroll-anim">

                    <span class="inline-flex items-center gap-3
                                 bg-black text-white
                                 px-5 py-3 rounded-full
                                 text-xs font-black uppercase tracking-[0.25em]
                                 mb-8">

                        <span class="w-3 h-3 bg-red-500 rounded-full animate-pulse"></span>

                        Outlet Marents

                    </span>

                    <h1 class="text-5xl md:text-7xl lg:text-[90px]
                               font-black uppercase
                               leading-[0.9] mb-8">

                        Diseños <br>

                        <span class="text-marents-gold">
                            únicos
                        </span>

                        <br>

                        precios especiales

                    </h1>

                    <p class="text-xl md:text-2xl
                              text-black/70
                              font-semibold
                              leading-relaxed
                              max-w-2xl">

                        Productos limitados, referencias exclusivas y modelos
                        que probablemente no volverán a fabricarse.
                        Aprovecha oportunidades únicas antes de que desaparezcan.

                    </p>

                    <div class="flex flex-wrap gap-5 mt-10">

                        <a href="#productos"
                           class="bg-black text-white
                                  px-10 py-5
                                  rounded-full
                                  font-black uppercase
                                  tracking-[0.15em]
                                  border-[3px] border-black
                                  hover:bg-marents-gold
                                  hover:text-black
                                  transition-all duration-300">

                            Ver productos

                        </a>

                        <a href="https://api.whatsapp.com/send/?phone=573045332113&text=Hola%20quiero%20información%20del%20Outlet"
                           target="_blank"
                           class="bg-white text-black
                                  px-10 py-5
                                  rounded-full
                                  font-black uppercase
                                  tracking-[0.15em]
                                  border-[3px] border-black
                                  hover:bg-black
                                  hover:text-white
                                  transition-all duration-300">

                            Consultar

                        </a>

                    </div>

                </div>

                {{-- CARD DESTACADA --}}
                <div class="relative scroll-anim">

                    <div class="absolute -bottom-6 -right-6
                                w-full h-full
                                border-[3px] border-black
                                rounded-[35px]">
                    </div>

                    <div class="relative z-10
                                bg-black text-white
                                border-[3px] border-black
                                rounded-[35px]
                                overflow-hidden">

                        <img src="{{ asset('img/Baner/Outlet.jpg') }}"
                             class="w-full h-[520px] object-cover"
                             alt="Outlet Marents">

                        <div class="absolute inset-0
                                    bg-gradient-to-t
                                    from-black via-black/30 to-transparent">
                        </div>

                        <div class="absolute bottom-0 left-0 p-8">

                            <span class="bg-marents-gold text-black
                                         px-4 py-2 rounded-full
                                         text-xs font-black uppercase">

                                Últimas unidades

                            </span>

                            <h2 class="text-4xl md:text-5xl
                                       font-black uppercase
                                       mt-5 leading-none">

                                Cuando se acaban,
                                <br>
                                no vuelven.

                            </h2>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ========================================= -->
    <!-- STRIP -->
    <!-- ========================================= -->

    <section class="bg-black text-white border-y-[3px] border-black overflow-hidden">

        <div class="flex whitespace-nowrap animate-marquee">

            @for($i = 0; $i < 10; $i++)

                <div class="py-5 px-10
                            text-sm md:text-base
                            uppercase tracking-[0.3em]
                            font-black">

                    Ediciones limitadas ✦ Precios especiales ✦ Outlet Marents ✦

                </div>

            @endfor

        </div>

    </section>

    <!-- ========================================= -->
    <!-- INFO -->
    <!-- ========================================= -->

    <section class="py-24 border-b-[3px] border-black">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid lg:grid-cols-3 gap-8">

                <div class="bg-white border-[3px] border-black
                            p-10 rounded-[30px]
                            shadow-[8px_8px_0_#000]
                            scroll-anim">

                    <div class="text-6xl mb-8">
                        ⏳
                    </div>

                    <h3 class="text-3xl font-black uppercase mb-5">
                        Temporales
                    </h3>

                    <p class="text-black/70 text-lg leading-relaxed font-semibold">

                        Muchos modelos del outlet son referencias temporales
                        o unidades restantes que dejarán de estar disponibles.

                    </p>

                </div>

                <div class="bg-marents-gold border-[3px] border-black
                            p-10 rounded-[30px]
                            shadow-[8px_8px_0_#000]
                            scroll-anim">

                    <div class="text-6xl mb-8">
                        🔥
                    </div>

                    <h3 class="text-3xl font-black uppercase mb-5">
                        Precios especiales
                    </h3>

                    <p class="text-black text-lg leading-relaxed font-semibold">

                        Aprovecha diseños exclusivos con precios reducidos
                        sin perder la calidad y personalidad Marents.

                    </p>

                </div>

                <div class="bg-white border-[3px] border-black
                            p-10 rounded-[30px]
                            shadow-[8px_8px_0_#000]
                            scroll-anim">

                    <div class="text-6xl mb-8">
                        ⚡
                    </div>

                    <h3 class="text-3xl font-black uppercase mb-5">
                        No se repiten
                    </h3>

                    <p class="text-black/70 text-lg leading-relaxed font-semibold">

                        Algunas referencias son únicas y no volverán a producción.
                        Cuando se venden, desaparecen.

                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- ========================================= -->
    <!-- PRODUCTOS -->
    <!-- ========================================= -->

    <section id="productos" class="py-24">

        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col lg:flex-row
                        lg:items-end lg:justify-between
                        gap-8 mb-14">

                <div>

                    <p class="uppercase tracking-[0.3em]
                              text-sm font-black
                              text-black/50 mb-4">

                        Outlet disponible

                    </p>

                    <h2 class="text-5xl md:text-7xl
                               font-black uppercase
                               leading-[0.9]">

                        Últimas
                        <span class="text-marents-gold">
                            oportunidades
                        </span>

                    </h2>

                </div>

                <p class="max-w-2xl
                          text-lg text-black/65
                          font-semibold leading-relaxed">

                    Explora modelos seleccionados con descuentos especiales.
                    Algunos cuentan con muy pocas unidades disponibles.

                </p>

            </div>

            {{-- AQUÍ VAN LOS PRODUCTOS --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8">

                @foreach($productos as $producto)

                    @php

                        $imagenDB = $producto->imagenes->first()?->url;

                        if ($imagenDB) {

                            $imagenDB = str_replace('\\', '/', $imagenDB);

                            if (!str_contains($imagenDB, 'img/')) {
                                $imagenDB = 'img/' . ltrim($imagenDB, '/');
                            }

                        }

                        $precio = $producto->variaciones
                                    ->where('stock', '>', 0)
                                    ->avg('precio');

                    @endphp

                    <div class="group bg-white
                                border-[3px] border-black
                                rounded-[30px]
                                overflow-hidden
                                shadow-[8px_8px_0_#000]
                                hover:-translate-y-2
                                hover:shadow-[12px_12px_0_#EDE734]
                                transition-all duration-300">

                        <div class="relative overflow-hidden bg-[#f5f5f5]">

                            <img src="{{ $imagenDB ? asset($imagenDB) : asset('img/default.png') }}"
                                 class="w-full h-80 object-contain p-6
                                        group-hover:scale-105
                                        transition duration-500"
                                 alt="Producto outlet">

                            <div class="absolute top-4 left-4
                                        bg-red-500 text-white
                                        px-4 py-2 rounded-full
                                        text-xs font-black uppercase">

                                Outlet

                            </div>

                        </div>

                        <div class="p-7">

                            <h3 class="text-2xl font-black uppercase mb-4">

                                {{ $producto->modelo->nombre ?? 'Producto' }}

                            </h3>

                            <p class="text-black/65
                                      font-semibold leading-relaxed mb-6">

                                Referencia especial disponible por tiempo limitado.

                            </p>

                            <div class="flex items-end justify-between gap-5">

                                <div>

                                    <p class="text-xs uppercase
                                              tracking-[0.2em]
                                              text-black/45
                                              font-black mb-1">

                                        Desde

                                    </p>

                                    <p class="text-3xl font-black">

                                        ${{ number_format($precio ?? 0) }}

                                    </p>

                                </div>

                                <a href="{{ url('/producto/' . $producto->id) }}"
                                   class="bg-black text-white
                                          px-6 py-3 rounded-full
                                          uppercase text-sm font-black
                                          hover:bg-marents-gold
                                          hover:text-black
                                          transition-all duration-300">

                                    Ver más

                                </a>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

    <!-- ========================================= -->
    <!-- CTA -->
    <!-- ========================================= -->

    <section class="pb-24">

        <div class="max-w-7xl mx-auto px-6">

            <div class="relative overflow-hidden
                        bg-black text-white
                        border-[3px] border-black
                        rounded-[40px]
                        p-10 md:p-16 text-center">

                <div class="absolute -top-32 -right-32
                            w-[350px] h-[350px]
                            bg-marents-gold/20
                            rounded-full blur-[120px]">
                </div>

                <div class="relative z-10">

                    <p class="uppercase tracking-[0.3em]
                              text-sm font-black
                              text-marents-gold mb-5">

                        Outlet Marents

                    </p>

                    <h2 class="text-4xl md:text-6xl
                               font-black uppercase
                               leading-[0.95] mb-6">

                        Cuando se venden,
                        <br>
                        desaparecen.

                    </h2>

                    <p class="max-w-2xl mx-auto
                              text-lg text-white/70
                              font-semibold leading-relaxed mb-10">

                        Aprovecha referencias exclusivas y diseños especiales
                        antes de que salgan definitivamente del catálogo.

                    </p>

                    <a href="https://api.whatsapp.com/send/?phone=573045332113&text=Hola%20quiero%20ver%20productos%20del%20Outlet"
                       target="_blank"
                       class="inline-flex items-center justify-center
                              bg-marents-gold text-black
                              px-10 py-5 rounded-full
                              font-black uppercase
                              tracking-[0.15em]
                              hover:bg-white
                              transition-all duration-300">

                        Consultar disponibilidad

                    </a>

                </div>

            </div>

        </div>

    </section>

</section>

<style>

@keyframes marquee {

    0%{
        transform:translateX(0%);
    }

    100%{
        transform:translateX(-50%);
    }

}

.animate-marquee{
    animation:marquee 18s linear infinite;
}

.scroll-anim{
    opacity:0;
    transform:translateY(60px);
    transition:all .8s ease;
}

.scroll-anim.show{
    opacity:1;
    transform:translateY(0);
}

</style>

<script>

document.addEventListener('DOMContentLoaded', () => {

    const elementos = document.querySelectorAll('.scroll-anim');

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if(entry.isIntersecting){

                entry.target.classList.add('show');

            }

        });

    },{
        threshold:0.15
    });

    elementos.forEach(el => observer.observe(el));

});

</script>

@endsection