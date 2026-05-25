@extends('layouts.app')

@section('title', 'Marents')

@section('content')

<script>
document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll(".fade-in");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    }, { threshold: 0.15 });

    elements.forEach(el => observer.observe(el));
});
</script>

<div class="bg-white text-black overflow-hidden">

<!-- ========================================= -->
<!-- HERO NUEVO -->
<!-- ========================================= -->

<section class="relative min-h-screen overflow-hidden border-b-[3px] border-black bg-[#f8f5ef]">

    {{-- GRID FONDO --}}
    <div class="absolute inset-0
        bg-[linear-gradient(to_right,rgba(0,0,0,.06)_1px,transparent_1px),
        linear-gradient(to_bottom,rgba(0,0,0,.06)_1px,transparent_1px)]
        bg-[size:40px_40px]">
    </div>

    {{-- EFECTO DECORATIVO --}}
    <div class="absolute -top-40 -right-40 w-[500px] h-[500px]
                rounded-full bg-marents-gold/20 blur-3xl">
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-20 min-h-screen flex items-center">

        <div class="grid lg:grid-cols-12 gap-14 items-center w-full">

            <!-- TEXTO -->
            <div class="lg:col-span-7 fade-in">

                {{-- TAG --}}
                <div class="inline-flex items-center gap-3
                            border-[3px] border-black
                            px-5 py-2 rounded-full
                            bg-white mb-8">

                    <span class="w-3 h-3 bg-marents-gold rounded-full animate-pulse"></span>

                    <span class="uppercase tracking-[0.25em]
                                 text-xs font-black">

                        Marents / Tu estilo

                    </span>

                </div>

                {{-- TITULO --}}
                <h1 class="text-5xl md:text-7xl lg:text-[110px]
                           font-black uppercase
                           leading-[0.85]">

                    <span class="text-black">
                        Marca
                    </span>

                    <br>

                    <span class="text-marents-gold">
                        tu camino
                    </span>

                    <br>

                    <span class="text-black">
                        con estilo
                    </span>

                </h1>

                {{-- TEXTO --}}
                <p class="mt-8 text-xl md:text-2xl
                          text-black/70
                          leading-relaxed
                          max-w-2xl
                          font-semibold">

                    Diseño, comodidad y personalidad en cada paso.
                    Descubre colecciones creadas para destacar.

                </p>

                {{-- BOTONES --}}
                <div class="mt-10 flex flex-wrap gap-5">

                    <a href="{{ url('/categoria/hombre') }}"
                       class="bg-black text-white
                              px-10 py-5
                              rounded-full
                              font-black uppercase
                              tracking-[0.15em]
                              border-[3px] border-black
                              hover:bg-marents-gold
                              hover:text-black
                              hover:scale-105
                              transition-all duration-300">

                        Ver colección

                    </a>

                    <a href="#marca"
                       class="bg-white text-black
                              px-10 py-5
                              rounded-full
                              font-black uppercase
                              tracking-[0.15em]
                              border-[3px] border-black
                              hover:bg-black
                              hover:text-white
                              hover:scale-105
                              transition-all duration-300">

                        Conocer más

                    </a>

                </div>

                {{-- STATS --}}
                <div class="flex flex-wrap gap-5 mt-14">

                    <div class="bg-white border-[3px] border-black
                                px-6 py-5 rounded-[22px]">

                        <p class="text-4xl font-black">
                            +100
                        </p>

                        <p class="uppercase text-xs tracking-[0.2em]
                                  font-black text-black/50 mt-2">

                            Diseños

                        </p>

                    </div>

                    <div class="bg-black text-white border-[3px] border-black
                                px-6 py-5 rounded-[22px]">

                        <p class="text-4xl font-black text-marents-gold">
                            Calidad
                        </p>

                        <p class="uppercase text-xs tracking-[0.2em]
                                  font-black text-white/50 mt-2">

                            Garantizada

                        </p>

                    </div>

                </div>

            </div>

            <!-- VIDEO TIKTOK -->
            <div class="lg:col-span-5 fade-in">

                <div class="relative">

                    {{-- BORDE DECORATIVO --}}
                    <div class="absolute -bottom-6 -right-6
                                w-full h-full
                                border-[3px] border-black
                                rounded-[35px]">
                    </div>

                    {{-- CARD --}}
                    <div class="relative z-10
                                bg-white
                                border-[3px] border-black
                                rounded-[35px]
                                overflow-hidden
                                shadow-[12px_12px_0_#000]">

                        {{-- HEADER --}}
                        <div class="flex items-center justify-between
                                    border-b-[3px] border-black
                                    px-6 py-5 bg-[#f8f5ef]">

                            <div>

                                <p class="uppercase tracking-[0.25em]
                                          text-xs font-black
                                          text-black/45">

                                    Reel destacado

                                </p>

                                <h3 class="text-2xl font-black uppercase mt-1">
                                    Marents
                                </h3>

                            </div>

                            <div class="bg-black text-white
                                        px-4 py-2 rounded-full
                                        text-xs font-black uppercase">

                                TikTok

                            </div>

                        </div>

                        {{-- VIDEO --}}
                        <div class="p-4 bg-white">

                            <div class="rounded-[25px]
                                        overflow-hidden
                                        border-[3px] border-black
                                        bg-black">

                                <blockquote
                                    class="tiktok-embed"
                                    cite="https://www.tiktok.com/@calzadomarents_7/video/7468435565633981702"
                                    data-video-id="7468435565633981702"
                                    style="max-width: 100%; min-width: 100%;">

                                    <section></section>

                                </blockquote>

                            </div>

                        </div>

                        {{-- FOOTER --}}
                        <div class="bg-marents-gold
                                    border-t-[3px] border-black
                                    px-6 py-5">

                            <p class="font-black uppercase
                                      tracking-[0.2em]
                                      text-sm">

                                No sigas tendencias. Créalas.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- TikTok Embed -->
<script async src="https://www.tiktok.com/embed.js"></script>

<!-- ========================================= -->
<!-- STRIPES -->
<!-- ========================================= -->

<section class="bg-black text-white border-b-[3px] border-black">

    <div class="grid grid-cols-3">

        <div class="py-5 text-center
                    font-black uppercase
                    tracking-[0.25em]
                    border-r-[3px] border-white/20">

            Diseño

        </div>

        <div class="py-5 text-center
                    font-black uppercase
                    tracking-[0.25em]
                    text-marents-gold
                    border-r-[3px] border-white/20">

            Calidad

        </div>

        <div class="py-5 text-center
                    font-black uppercase
                    tracking-[0.25em]">

            Carácter

        </div>

    </div>

</section>
<br>
<!-- COLECCIÓN -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-5 gap-5">

    @foreach([

        [
            'titulo' => 'Hombre',
            'frase' => 'Comodidad y estilo que te acompañan en cada paso.',
            'media' => 'img/Baner/hombre.png',
            'tipo' => 'img',
            'url' => '/categoria/hombre',
        ],

        [
            'titulo' => 'Mujer',
            'frase' => 'Donde hay actitud, hay estilo en cada paso.',
            'media' => 'img/Baner/mujer.png',
            'tipo' => 'img',
            'url' => '/categoria/mujer',
        ],

        [
            'titulo' => 'Niños',
            'frase' => 'Cada paso acompaña sus primeras aventuras.',
            'media' => 'img/Baner/niños.png',
            'tipo' => 'img',
            'url' => '/categoria/ninos',
        ],

        [
            'titulo' => 'Outlet',
            'frase' => 'Encuentra tu par ideal con precios especiales.',
            'media' => 'img/Baner/Outlet.jpg',
            'tipo' => 'outlet',
            'url' => '/categoria/outlet',
        ],

        [
            'titulo' => 'Pisa Huevos',
            'frase' => 'Comodidad que se adapta a cada estilo. Personalizable o lista para usar.',
            'media' => 'img/Baner/pisa_huevo.mp4',
            'tipo' => 'video',
            'url' => '/categoria/pisa-huevos',
        ],

    ] as $item)

    <a href="{{ url($item['url']) }}"
       class="group relative overflow-hidden rounded-[28px]
              min-h-[520px] border-4 border-black
              bg-black transition-all duration-500
              hover:-translate-y-2 hover:shadow-[12px_12px_0px_#000]">

        {{-- MEDIA --}}
        <div class="absolute inset-0">

            {{-- IMAGEN NORMAL --}}
            @if($item['tipo'] === 'img')

                <img src="{{ asset($item['media']) }}"
                     alt="{{ $item['titulo'] }}"
                     class="w-full h-full object-cover
                            transition-transform duration-700
                            group-hover:scale-110">

            @endif

            {{-- VIDEO --}}
            @if($item['tipo'] === 'video')

                <video autoplay muted loop playsinline
                       class="w-full h-full object-cover
                              transition-transform duration-700
                              group-hover:scale-110">

                    <source src="{{ asset($item['media']) }}" type="video/mp4">

                </video>

            @endif

            {{-- OUTLET --}}
            @if($item['tipo'] === 'outlet')

                <div class="absolute inset-0 overflow-hidden">

                    <img src="{{ asset($item['media']) }}"
                         alt="{{ $item['titulo'] }}"
                         class="w-full h-full object-cover
                                transition-transform duration-700
                                group-hover:scale-110">

                    {{-- EFECTO ANIMADO --}}
                    <div class="absolute inset-0
                                bg-[linear-gradient(120deg,transparent_20%,rgba(255,255,255,0.5)_50%,transparent_80%)]
                                translate-x-[-150%]
                                group-hover:translate-x-[150%]
                                transition-all duration-1000">
                    </div>

                    {{-- BADGE OUTLET --}}
                    <div class="absolute top-5 right-5
                                bg-red-500 text-white
                                px-4 py-2 rounded-full
                                font-black text-sm
                                animate-pulse">

                        OFERTAS

                    </div>

                </div>

            @endif

        </div>

        {{-- OVERLAY --}}
        <div class="absolute inset-0
                    bg-gradient-to-t
                    from-black via-black/30 to-transparent">
        </div>

        {{-- CONTENIDO --}}
        <div class="relative z-10 flex flex-col justify-end h-full p-7">

            <span class="mb-3 w-fit
                         bg-white text-black
                         px-4 py-1 rounded-full
                         text-xs font-black uppercase tracking-[0.2em]">

                {{ $item['titulo'] }}

            </span>

            <h3 class="text-4xl text-white font-black uppercase leading-none">

                {{ $item['titulo'] }}

            </h3>

            <p class="text-white/80 mt-4 leading-relaxed font-medium">

                {{ $item['frase'] }}

            </p>

            {{-- BOTÓN --}}
            <div class="mt-6 flex items-center gap-3">

                <span class="bg-white text-black
                             px-5 py-3 rounded-full
                             font-black uppercase text-sm
                             transition-all duration-300
                             group-hover:bg-marents-gold">

                    Ver colección

                </span>

                <span class="text-white text-2xl
                             transition-transform duration-300
                             group-hover:translate-x-2">

                    →
                    
                </span>

            </div>

        </div>

    </a>

    @endforeach

</div>

<br>


<!-- ========================================= -->
<!-- OUTLET MARENTS -->
<!-- ========================================= -->

<section class="py-24 bg-black text-white border-y-[3px] border-black fade-in overflow-hidden relative">

    {{-- GRID FONDO --}}
    <div class="absolute inset-0 opacity-10">

        <div class="absolute inset-0
                    bg-[linear-gradient(to_right,rgba(255,255,255,.08)_1px,transparent_1px),
                        linear-gradient(to_bottom,rgba(255,255,255,.08)_1px,transparent_1px)]
                    bg-[size:35px_35px]">
        </div>

    </div>

    <div class="max-w-6xl mx-auto px-6 relative z-10 text-center">

        {{-- BADGE --}}
        <div class="inline-flex items-center gap-3
                    bg-marents-gold text-black
                    px-6 py-3 rounded-full
                    font-black uppercase tracking-[0.25em]
                    text-sm mb-8 animate-pulse">

            🔥 Outlet Marents

        </div>

        {{-- TITULO --}}
        <h2 class="text-5xl md:text-7xl
                   font-black uppercase
                   leading-[0.9] max-w-5xl mx-auto">

            Diseño, calidad y estilo
            <span class="text-marents-gold">
                al mejor precio
            </span>

        </h2>

        {{-- LINEA --}}
        <div class="w-32 h-[6px]
                    bg-marents-gold
                    rounded-full mx-auto
                    mt-10 mb-12">
        </div>

        {{-- TEXO --}}
        <div class="max-w-4xl mx-auto space-y-6">

            <p class="text-xl md:text-2xl
                      text-white/75
                      leading-relaxed
                      font-medium">

                Descubre una selección de tenis con precios especiales
                y disponibilidad limitada.

            </p>

            <p class="text-lg md:text-xl
                      text-white/65
                      leading-relaxed">

                Referencias seleccionadas con descuentos únicos,
                disponibles en tallas específicas.

            </p>

            <p class="text-lg md:text-xl
                      text-white/65
                      leading-relaxed">

                Cada modelo cuenta con unidades limitadas,
                por lo que representan oportunidades
                que no se repiten.

            </p>

        </div>

        {{-- DESTACADO --}}
        <div class="mt-14 inline-block
                    border-[3px] border-marents-gold
                    px-8 py-5 rounded-[25px]">

            <p class="text-2xl md:text-3xl
                      font-black uppercase
                      text-marents-gold">

                Aprovecha antes de que se agoten

            </p>

        </div>

        {{-- BOTON --}}
        <div class="mt-14">

            <a href="{{ url('/categoria/outlet') }}"
               class="inline-flex items-center gap-3
                      bg-marents-gold text-black
                      px-10 py-5 rounded-full
                      font-black uppercase
                      text-sm tracking-[0.2em]
                      hover:scale-105
                      transition-all duration-300">

                Ver colección outlet →

            </a>

        </div>

    </div>

</section>



    
<!-- ========================================= -->
<!-- PROCESO -->
<!-- ========================================= -->

<section class="py-24 bg-white border-b-[3px] border-black fade-in">

    <div class="max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="grid lg:grid-cols-2 gap-10 mb-14 items-end">

            <div>

                <p class="uppercase tracking-[0.35em]
                          text-sm font-black
                          text-black/60 mb-5">

                    Proceso

                </p>

                <h2 class="text-5xl md:text-7xl
                           font-black uppercase
                           text-marents-gold
                           leading-[0.85]">

                    Así nace<br>
                    cada par

                </h2>

            </div>

            <div class="border-[3px] border-black
                        bg-[#f8f5ef]
                        p-8 rounded-[25px]">

                <p class="text-xl text-black/75
                          leading-relaxed font-semibold">

                    Cada producto pasa por un proceso cuidadoso
                    que garantiza calidad, precisión y dedicación
                    en cada detalle.

                </p>

            </div>

        </div>

        {{-- GRID PRINCIPAL --}}
        <div class="grid lg:grid-cols-12 gap-8 items-stretch">

            <!-- VIDEO FACEBOOK REEL -->
            <div class="lg:col-span-5
                        border-[3px] border-black
                        bg-[#f5f5f5]
                        rounded-[35px]
                        overflow-hidden
                        shadow-[10px_10px_0_#EDE734]
                        min-h-[720px]">

                <div class="h-full flex flex-col">

                    {{-- HEADER VIDEO --}}
                    <div class="border-b-[3px] border-black
                                p-6 bg-white">

                        <p class="uppercase tracking-[0.3em]
                                  text-xs font-black
                                  text-black/45 mb-2">

                            Proceso real Marents

                        </p>

                        <h3 class="text-3xl font-black uppercase">

                            Nada es improvisado

                        </h3>

                    </div>

                    {{-- VIDEO --}}
                    <div class="flex-1 p-4 flex items-center justify-center">

                        <div class="w-full h-full rounded-[25px]
                                    overflow-hidden border-[3px] border-black">

                            <!-- Facebook SDK -->
                            <div id="fb-root"></div>

                            <script async defer crossorigin="anonymous"
                                src="https://www.facebook.com/reel/296935049953249">
                            </script>

                            <!-- Reel embed -->
                            <div class="fb-video w-full h-full"
                                data-href="https://www.facebook.com/reel/296935049953249"
                                data-width="500"
                                data-show-text="false">
                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- PASOS -->
            <div class="lg:col-span-7
                        border-[3px] border-black
                        divide-y-[3px] divide-black
                        bg-white
                        overflow-hidden
                        rounded-[35px]">

                <!-- PASO 1 -->
                <div class="grid md:grid-cols-[140px_1fr]
                            hover:bg-[#f8f5ef]
                            transition-all duration-300">

                    <div class="bg-marents-gold text-black
                                flex items-center justify-center
                                text-5xl font-black
                                border-r-[3px] border-black
                                min-h-[170px]">

                        01

                    </div>

                    <div class="p-8 flex flex-col justify-center">

                        <h3 class="text-4xl font-black uppercase">

                            Corte

                        </h3>

                        <p class="text-black/65 mt-3
                                  text-lg leading-relaxed
                                  font-medium">

                            Precisión que da vida a cada detalle.

                        </p>

                    </div>

                </div>

                <!-- PASO 2 -->
                <div class="grid md:grid-cols-[140px_1fr]
                            hover:bg-[#f8f5ef]
                            transition-all duration-300">

                    <div class="bg-black text-white
                                flex items-center justify-center
                                text-5xl font-black
                                border-r-[3px] border-black
                                min-h-[170px]">

                        02

                    </div>

                    <div class="p-8 flex flex-col justify-center">

                        <h3 class="text-4xl font-black uppercase">

                            Guarnición

                        </h3>

                        <p class="text-black/65 mt-3
                                  text-lg leading-relaxed
                                  font-medium">

                            Detalles que construyen forma y resistencia.

                        </p>

                    </div>

                </div>

                <!-- PASO 3 -->
                <div class="grid md:grid-cols-[140px_1fr]
                            hover:bg-[#f8f5ef]
                            transition-all duration-300">

                    <div class="bg-marents-gold text-black
                                flex items-center justify-center
                                text-5xl font-black
                                border-r-[3px] border-black
                                min-h-[170px]">

                        03

                    </div>

                    <div class="p-8 flex flex-col justify-center">

                        <h3 class="text-4xl font-black uppercase">

                            Ensamblaje

                        </h3>

                        <p class="text-black/65 mt-3
                                  text-lg leading-relaxed
                                  font-medium">

                            Cada pieza se une con dedicación.

                        </p>

                    </div>

                </div>

                <!-- PASO 4 -->
                <div class="grid md:grid-cols-[140px_1fr]
                            hover:bg-[#f8f5ef]
                            transition-all duration-300">

                    <div class="bg-black text-white
                                flex items-center justify-center
                                text-5xl font-black
                                border-r-[3px] border-black
                                min-h-[170px]">

                        04

                    </div>

                    <div class="p-8 flex flex-col justify-center">

                        <h3 class="text-4xl font-black uppercase">

                            Acabados

                        </h3>

                        <p class="text-black/65 mt-3
                                  text-lg leading-relaxed
                                  font-medium">

                            El toque final que define la calidad.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


</section>

<!-- ========================================= -->
<!-- TRANSICIÓN PROCESO → DIFERENCIAL -->
<!-- ========================================= -->

<div class="relative h-40 overflow-hidden bg-white border-b-[3px] border-black">

    {{-- DEGRADADO --}}
    <div class="absolute inset-0
                bg-gradient-to-b
                from-white
                via-[#f8f5ef]
                to-[#f5f5f5]">
    </div>

    {{-- GRID --}}
    <div class="absolute inset-0
                opacity-[0.06]
                bg-[linear-gradient(to_right,#000_1px,transparent_1px),
                linear-gradient(to_bottom,#000_1px,transparent_1px)]
                bg-[size:40px_40px]">
    </div>

    {{-- TEXTO DECORATIVO --}}
    <div class="absolute inset-0
                flex items-center justify-center">

        <h2 class="text-[70px] md:text-[140px]
                   font-black uppercase
                   text-black/[0.04]
                   tracking-[0.25em]
                   select-none">

            MARENTS

        </h2>

    </div>

    {{-- LINEA CENTRAL --}}
    <div class="absolute left-1/2 top-0 -translate-x-1/2
                w-[4px] h-full bg-black/10">
    </div>

    {{-- CIRCULO --}}
    <div class="absolute left-1/2 top-1/2
                -translate-x-1/2 -translate-y-1/2
                w-16 h-16 rounded-full
                border-[3px] border-black
                bg-marents-gold
                flex items-center justify-center
                shadow-[6px_6px_0_#000]">

        <span class="text-2xl font-black">
            ↓
        </span>

    </div>

</div>

<!-- ========================================= -->
<!-- DIFERENCIAL -->
<!-- ========================================= -->

<section class="relative py-28 bg-[#f5f5f5] border-b-[3px] border-black fade-in overflow-hidden">

    {{-- DECORACIÓN --}}
    <div class="absolute top-0 right-0
                w-[500px] h-[500px]
                bg-marents-gold/10
                rounded-full blur-3xl">
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        {{-- HEADER --}}
        <div class="flex flex-col lg:flex-row
                    lg:items-end lg:justify-between
                    gap-10 mb-16">

            <div>

                <p class="uppercase tracking-[0.35em]
                          text-sm font-black
                          text-black/60 mb-5">

                    Diferencial

                </p>

                <h2 class="text-5xl md:text-7xl
                           font-black uppercase
                           text-marents-gold
                           leading-[0.9]">

                    ¿Por qué<br>
                    Marents?

                </h2>

            </div>

            <div class="max-w-xl
                        border-[3px] border-black
                        bg-white
                        rounded-[28px]
                        p-8 shadow-[8px_8px_0_#000]">

                <p class="text-lg md:text-xl
                          font-semibold
                          leading-relaxed
                          text-black/75">

                    Cada diseño combina estilo, comodidad y calidad
                    para ofrecer una experiencia auténtica en cada paso.

                </p>

            </div>

        </div>

        {{-- GRID --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

            @foreach([
                [
                    'titulo' => 'Alta calidad',
                    'icono' => '✦'
                ],
                [
                    'titulo' => 'Diseño exclusivo',
                    'icono' => '⬢'
                ],
                [
                    'titulo' => 'Hecho con dedicación',
                    'icono' => '✚'
                ],
                [
                    'titulo' => 'Comodidad garantizada',
                    'icono' => '◎'
                ]
            ] as $item)

            <div class="group relative
                        bg-white
                        border-[3px] border-black
                        rounded-[30px]
                        p-8
                        overflow-hidden
                        hover:-translate-y-3
                        hover:shadow-[10px_10px_0_#000]
                        transition-all duration-500">

                {{-- FONDO HOVER --}}
                <div class="absolute inset-0
                            bg-black
                            translate-y-full
                            group-hover:translate-y-0
                            transition-transform duration-500">
                </div>

                <div class="relative z-10">

                    {{-- ICONO --}}
                    <div class="w-20 h-20
                                rounded-2xl
                                border-[3px] border-black
                                bg-marents-gold
                                flex items-center justify-center
                                text-4xl font-black
                                mb-8
                                group-hover:rotate-6
                                transition-transform duration-500">

                        {{ $item['icono'] }}

                    </div>

                    {{-- TITULO --}}
                    <h3 class="text-3xl
                               font-black uppercase
                               leading-tight
                               group-hover:text-white
                               transition-colors duration-300">

                        {{ $item['titulo'] }}

                    </h3>

                    {{-- TEXTO --}}
                    <p class="mt-5
                              text-black/70
                              font-medium
                              leading-relaxed
                              group-hover:text-white/70
                              transition-colors duration-300">

                        Un valor que se refleja en cada detalle
                        y en cada experiencia con Marents.

                    </p>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>


<!-- ========================================= -->
<!-- HISTORIA -->
<!-- ========================================= -->

<section class="relative py-28 bg-[#f8f5ef] overflow-hidden border-t-[3px] border-black">

    {{-- GRID FONDO --}}
    <div class="absolute inset-0
                opacity-[0.05]
                bg-[linear-gradient(to_right,#000_1px,transparent_1px),
                linear-gradient(to_bottom,#000_1px,transparent_1px)]
                bg-[size:40px_40px]">
    </div>

    {{-- EFECTO --}}
    <div class="absolute -left-32 top-20
                w-[420px] h-[420px]
                bg-marents-gold/20
                rounded-full blur-3xl">
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-12 gap-16 items-center">

            <!-- IMAGEN -->
            <div class="lg:col-span-5">

                <div class="relative">

                    {{-- BORDE DECORATIVO --}}
                    <div class="absolute -bottom-6 -right-6
                                w-full h-full
                                border-[3px] border-black
                                rounded-[35px]">
                    </div>

                    {{-- IMAGEN --}}
                    <img src="{{ asset('img/Baner/historia.jpg') }}"
                         alt="Historia Marents"
                         class="relative z-10
                                w-full h-[650px]
                                object-cover
                                rounded-[35px]
                                border-[3px] border-black
                                shadow-[12px_12px_0_#000]">

                    {{-- BADGE --}}
                    <div class="absolute top-6 left-6 z-20
                                bg-white border-[3px] border-black
                                rounded-full px-5 py-2
                                font-black uppercase
                                tracking-[0.2em]
                                text-xs">

                        Desde nuestros inicios

                    </div>

                </div>

            </div>

            <!-- TEXTO -->
            <div class="lg:col-span-7">

                {{-- TAG --}}
                <div class="inline-flex items-center gap-3
                            border-[3px] border-black
                            rounded-full
                            bg-white
                            px-5 py-2 mb-8">

                    <span class="w-3 h-3 bg-marents-gold rounded-full animate-pulse"></span>

                    <span class="uppercase tracking-[0.25em]
                                 text-xs font-black">

                        Nuestra historia

                    </span>

                </div>

                {{-- TITULO --}}
                <h2 class="text-5xl md:text-7xl
                           font-black uppercase
                           leading-[0.9]">

                    Más que
                    <span class="text-marents-gold">
                        calzado
                    </span>

                </h2>

                {{-- LINEA --}}
                <div class="flex items-center gap-4 mt-10 mb-12">

                    <span class="w-24 h-[5px] bg-black rounded-full"></span>

                    <span class="uppercase tracking-[0.3em]
                                 text-xs font-black text-black/40">

                        Marents

                    </span>

                </div>

                {{-- TEXTO --}}
                <div class="space-y-7">

                    <div class="bg-white
                                border-[3px] border-black
                                rounded-[28px]
                                p-8
                                shadow-[8px_8px_0_#000]">

                        <p class="text-lg md:text-xl
                                  leading-relaxed
                                  text-black/75
                                  font-medium">

                            Marents nace como un sueño convertido en realidad,
                            inspirado en un proyecto de grado con la visión
                            de incursionar en el mercado a través de propuestas diferentes.

                        </p>

                    </div>

                    <div class="grid md:grid-cols-2 gap-6">

                        <div class="bg-black text-white
                                    border-[3px] border-black
                                    rounded-[28px]
                                    p-7">

                            <h3 class="text-2xl font-black uppercase mb-4 text-marents-gold">

                                Evolución

                            </h3>

                            <p class="leading-relaxed text-white/75 font-medium">

                                Hoy se consolida como un emprendimiento que apuesta
                                por diseños exclusivos, calidad y modelos competitivos,
                                pensados para quienes buscan algo más que un simple calzado.

                            </p>

                        </div>

                        <div class="bg-marents-gold
                                    border-[3px] border-black
                                    rounded-[28px]
                                    p-7">

                            <h3 class="text-2xl font-black uppercase mb-4">

                                Identidad

                            </h3>

                            <p class="leading-relaxed text-black/75 font-medium">

                                La marca surge con el propósito de ofrecer
                                una experiencia única, donde cada par refleje
                                autenticidad, estilo y personalidad.

                            </p>

                        </div>

                    </div>

                    <div class="bg-white
                                border-[3px] border-black
                                rounded-[28px]
                                p-8">

                        <p class="text-lg leading-relaxed
                                  text-black/75 font-medium">

                            La inspiración se encuentra en la satisfacción
                            de los clientes, sus recomendaciones y cada comentario positivo
                            que impulsa el crecimiento y la mejora continua.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>














<!-- ========================================= -->
<!-- TRANSICIÓN DIFERENCIAL → HISTORIA -->
<!-- ========================================= -->

<div class="relative h-52 overflow-hidden bg-[#f5f5f5]">

    {{-- DEGRADADO --}}
    <div class="absolute inset-0
                bg-gradient-to-b
                from-[#f5f5f5]
                via-[#f7f1e6]
                to-[#f8f5ef]">
    </div>

    {{-- CURVA --}}
    <svg class="absolute bottom-0 left-0 w-full"
         viewBox="0 0 1440 220"
         fill="none"
         preserveAspectRatio="none">

        <path d="M0,160
                 C280,260
                 520,40
                 820,120
                 C1080,190
                 1240,250
                 1440,140
                 L1440,220
                 L0,220Z"
              fill="#f8f5ef">
        </path>

    </svg>

    {{-- TEXTO --}}
    <div class="absolute inset-0
                flex items-center justify-center">

        <div class="flex items-center gap-5">

            <span class="w-16 h-[4px] bg-black"></span>

            <span class="uppercase tracking-[0.35em]
                         text-sm font-black text-black/40">

                Nuestra esencia

            </span>

            <span class="w-16 h-[4px] bg-marents-gold"></span>

        </div>

    </div>

</div>


<!-- ========================================= -->
<!-- UBICACIÓN -->
<!-- ========================================= -->

<section class="py-24 bg-white border-t-[3px] border-black">

    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

        {{-- TEXTO --}}
        <div>

            <span class="inline-block
                         border-[3px] border-black
                         px-5 py-2 rounded-full
                         font-black uppercase tracking-[0.2em]
                         text-sm mb-6">

                ¿Dónde estamos?

            </span>

            <h2 class="text-5xl md:text-6xl font-black uppercase leading-none">

                Hecho en
                <span class="text-marents-gold">
                    Sibaté
                </span>

            </h2>

            <div class="w-24 h-[5px] bg-black mt-8 mb-10 rounded-full"></div>

            <div class="space-y-6 text-lg leading-relaxed text-black/75 font-medium">

                <p>
                    Marents se encuentra ubicado en Sibaté, Cundinamarca,
                    frente al parque principal.
                </p>

                <p>
                    Cuenta con punto físico y espacio de fabricación
                    en el mismo municipio, permitiendo un control directo
                    en cada proceso.
                </p>

                <p>
                    También se realizan envíos a nivel nacional,
                    facilitando que los productos lleguen a diferentes
                    rincones del país.
                </p>

            </div>

            {{-- BADGES --}}
            <div class="flex flex-wrap gap-4 mt-10">

                <div class="border-[3px] border-black
                            px-5 py-3 rounded-full
                            font-black uppercase text-sm">

                    Punto físico

                </div>

                <div class="border-[3px] border-black
                            px-5 py-3 rounded-full
                            font-black uppercase text-sm">

                    Fabricación local

                </div>

                <div class="border-[3px] border-black
                            px-5 py-3 rounded-full
                            font-black uppercase text-sm">

                    Envíos nacionales

                </div>

            </div>

        </div>

        {{-- MAPA / IMAGEN --}}
        <div class="relative">

{{-- MAPA --}}
<div class="relative">

    {{-- BORDE DECORATIVO --}}
    <div class="absolute -bottom-6 -right-6 w-full h-full
                border-[3px] border-black rounded-[30px]">
    </div>

    {{-- MAPA --}}
    <div class="relative z-10 overflow-hidden rounded-[30px]
                border-[3px] border-black
                h-[600px] bg-white">

        <iframe
            src="https://www.google.com/maps?q=4.4918332,-74.2598833&hl=es&z=18&output=embed"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        {{-- CARD FLOTANTE --}}
        <div class="absolute bottom-5 left-5
                    bg-white border-[3px] border-black
                    rounded-2xl p-5 shadow-xl
                    max-w-[280px]">

            <h3 class="font-black uppercase text-lg">
                Marents
            </h3>

            <p class="text-black/70 mt-2 text-sm leading-relaxed">
                Sibaté, Cundinamarca <br>
                Frente al parque principal.
            </p>

            <a href="https://www.google.com/maps/place/Finca+Ra%C3%ADz/@4.4918796,-74.2598289,3a,75y,218h,92.03t/data=!3m8!1e1!3m6!1sBtid3pDlNfd79BA49CmD9A!2e0!5s20240201T000000!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fcb_client%3Dmaps_sv.tactile%26w%3D900%26h%3D600%26pitch%3D-2.0273208668809275%26panoid%3DBtid3pDlNfd79BA49CmD9A%26yaw%3D217.99737129899637!7i16384!8i8192!4m6!3m5!1s0x8e3f0a4a0f3ac86d:0x83cb265059a58345!8m2!3d4.4918332!4d-74.2598833!16s%2Fg%2F11x5gqbxys?entry=ttu&g_ep=EgoyMDI2MDUyMC4wIKXMDSoASAFQAw%3D%3D"
               target="_blank"
               class="inline-flex items-center gap-2 mt-4
                      bg-black text-white
                      px-4 py-2 rounded-full
                      font-bold text-sm
                      hover:bg-marents-gold hover:text-black
                      transition-all duration-300">

                Ver en Google Maps →

            </a>

        </div>

    </div>

</div>



        </div>

    </div>

</section>

    <!-- FINAL STATEMENT -->
    <section class="py-24 bg-white border-b-[3px] border-black fade-in">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <p class="uppercase tracking-[0.35em] text-sm font-black text-black/50 mb-5">
                Actitud Marents
            </p>

            <h2 class="text-5xl md:text-7xl lg:text-8xl font-black uppercase leading-[0.85]">
                No sigas<br>
                <span class="text-marents-gold">tendencias</span><br>
                créalas
            </h2>
        </div>
    </section>

    <!-- SOCIAL -->
<section class="py-20 bg-marents-gold text-black fade-in">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-10 items-center">

            <div>
                <p class="uppercase tracking-[0.35em] text-sm font-black mb-4">
                    Síguenos
                </p>

                <h2 class="text-5xl md:text-7xl font-black uppercase leading-[0.9]">
                    Conecta con<br>
                    Marents
                </h2>
            </div>

            <div class="grid gap-4">

                <!-- Instagram -->
                <a href="https://www.instagram.com/calzadomarents.tuestilo?utm_source=qr&igsh=MWl3YXQ0djFsNXlkag%3D%3D"
                   target="_blank"
                   class="flex items-center gap-4 bg-black text-white p-6 text-2xl font-black uppercase border-[3px] border-black hover:bg-white hover:text-black transition">

                    <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-gradient-to-tr from-pink-500 via-red-500 to-yellow-500">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2a1 1 0 110 2 1 1 0 010-2zM12 7a5 5 0 110 10 5 5 0 010-10z"/>
                        </svg>
                    </div>

                    Instagram ↗
                </a>

                <!-- Facebook -->
                <a href="https://www.facebook.com/marents.tuestilo?rdid=FKiYg2zAsp9Kswxb&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F18NfdhvMnV%2F#"
                   target="_blank"
                   class="flex items-center gap-4 bg-black text-white p-6 text-2xl font-black uppercase border-[3px] border-black hover:bg-white hover:text-black transition">

                    <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-blue-600">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12a10 10 0 10-11.5 9.95v-7.05H8v-3h2.5V9.5A3.5 3.5 0 0114 6h2v3h-2a1 1 0 00-1 1v1.95H16.5l-.5 3H13V22A10 10 0 0022 12z"/>
                        </svg>
                    </div>

                    Facebook ↗
                </a>

                <!-- TikTok -->
                <a href="https://www.tiktok.com/@calzadomarents_7?_r=1&_t=ZS-96KV2KcGWDE"
                   target="_blank"
                   class="flex items-center gap-4 bg-black text-white p-6 text-2xl font-black uppercase border-[3px] border-black hover:bg-white hover:text-black transition">

                    <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-black border border-white">
                        <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2v10.2a4.8 4.8 0 11-4.8-4.8h1.2V5.5h-1.2A7.5 7.5 0 1015.5 13V7.8a9.4 9.4 0 005.5 1.7V6.2a6 6 0 01-5-4.2H12z"/>
                        </svg>
                    </div>

                    TikTok ↗
                </a>

                <!-- WhatsApp -->
<a href="https://api.whatsapp.com/send/?phone=573045332113&text&type=phone_number&app_absent=0"
   target="_blank"
   class="flex items-center gap-4 bg-black text-white p-6 text-2xl font-black uppercase border-[3px] border-black hover:bg-white hover:text-black transition">

    <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-green-500">
        <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="currentColor">
            <path d="M20.52 3.48A11.86 11.86 0 0012.04 0C5.49 0 .15 5.34.15 11.89c0 2.09.55 4.14 1.59 5.94L0 24l6.32-1.66a11.84 11.84 0 005.72 1.46h.01c6.55 0 11.89-5.34 11.89-11.89 0-3.18-1.24-6.17-3.42-8.43zM12.05 21.5h-.01a9.6 9.6 0 01-4.9-1.34l-.35-.2-3.75.99 1-3.65-.23-.37a9.6 9.6 0 1118.17-5.03 9.6 9.6 0 01-9.93 9.6zm5.57-7.42c-.3-.15-1.78-.88-2.06-.98-.28-.1-.49-.15-.7.15-.21.3-.8.98-.98 1.18-.18.2-.36.22-.66.07-.3-.15-1.27-.47-2.43-1.5-.9-.8-1.5-1.8-1.67-2.1-.18-.3-.02-.46.13-.61.13-.13.3-.36.45-.54.15-.18.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.7-1.68-.96-2.3-.25-.6-.5-.52-.7-.53h-.6c-.2 0-.52.07-.8.37-.28.3-1.1 1.07-1.1 2.6s1.13 3.01 1.29 3.22c.15.2 2.2 3.36 5.34 4.71.75.32 1.34.52 1.8.66.75.24 1.43.2 1.97.12.6-.09 1.78-.73 2.03-1.44.25-.71.25-1.32.17-1.44-.07-.12-.28-.2-.58-.35z"/>
        </svg>
    </div>

    WhatsApp ↗
</a>

            </div>

        </div>
    </div>
</section>

</div>

<!-- LOGOS INSTITUCIONALES -->
<section class="py-20 bg-white border-t-[3px] border-black relative overflow-hidden">

    <!-- GRID FONDO -->
    <div class="absolute inset-0 
        bg-[linear-gradient(to_right,rgba(0,0,0,.05)_1px,transparent_1px),
        linear-gradient(to_bottom,rgba(0,0,0,.05)_1px,transparent_1px)] 
        bg-[size:38px_38px]">
    </div>

    <div class="relative max-w-7xl mx-auto px-6">

        <!-- TITULO -->
        <div class="text-center mb-14">

            <p class="uppercase tracking-[0.35em] text-sm font-black text-black/50 mb-4">
                Apoyan este proyecto
            </p>

            <h2 class="text-4xl md:text-6xl font-black uppercase leading-[0.9]">
                Aliados<br>
                <span class="text-marents-gold">institucionales</span>
            </h2>

        </div>

        <!-- LOGOS -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">

            <!-- 1 -->
            <div class="bg-white border-[3px] border-black 
                        h-52 flex items-center justify-center 
                        p-8 hover:-translate-y-2 
                        hover:shadow-[10px_10px_0_#000] 
                        transition duration-300">

                <img
                    src="{{ asset('img/logo/Fondo_emprender/sena_logo_1_.png') }}"
                    alt="SENA"
                    class="max-h-28 w-full object-contain">
            </div>

            <!-- 2 -->
            <div class="bg-white border-[3px] border-black 
                        h-52 flex items-center justify-center 
                        p-8 hover:-translate-y-2 
                        hover:shadow-[10px_10px_0_#000] 
                        transition duration-300">

                <img
                    src="{{ asset('img/logo/Fondo_emprender/fondo_empreder_logo_2.jpg') }}"
                    alt="Fondo Emprender"
                    class="max-h-28 w-full object-contain">
            </div>

            <!-- 3 -->
            <div class="bg-white border-[3px] border-black 
                        h-52 flex items-center justify-center 
                        p-8 hover:-translate-y-2 
                        hover:shadow-[10px_10px_0_#000] 
                        transition duration-300">

                <img
                    src="{{ asset('img/logo/Fondo_emprender/colombia_vida_logo_3.png') }}"
                    alt="Colombia Potencia de la Vida"
                    class="max-h-28 w-full object-contain">
            </div>

            <!-- 4 -->
            <div class="bg-white border-[3px] border-black 
                        h-52 flex items-center justify-center 
                        p-8 hover:-translate-y-2 
                        hover:shadow-[10px_10px_0_#000] 
                        transition duration-300">

                <img
                    src="{{ asset('img/logo/Fondo_emprender/colombia_logo_4.png') }}"
                    alt="Gobierno de Colombia"
                    class="max-h-28 w-full object-contain">
            </div>

        </div>

    </div>

</section>


@endsection