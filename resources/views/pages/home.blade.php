@extends('layouts.app')

@section('title', 'Marents')

@section('content')

<script>
document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll(".fade-in");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add("show");
        });
    }, { threshold: 0.15 });

    elements.forEach(el => observer.observe(el));
});
</script>

<div class="bg-white text-black overflow-hidden">

    <!-- BANNER NUEVO -->
    <section class="relative border-b-[3px] border-black bg-black">
        <img src="{{ asset('banners/banner_home.jpg') }}"
             alt="Banner Marents"
             class="w-full h-[420px] md:h-[560px] object-cover">

        <div class="absolute inset-0 bg-black/35 flex items-center justify-center text-center px-6">
            <div>
                <p class="text-marents-gold uppercase tracking-[0.35em] font-black mb-4">
                    Marents 
                </p>

                <h1 class="text-4xl md:text-7xl font-black uppercase text-white leading-[0.9]">
                    Marca tu camino<br>
                    <span class="text-marents-gold">con Marents</span>
                </h1>
            </div>
        </div>
    </section>

    <!-- HERO ADIDAS INSPIRED -->
    <section class="relative min-h-screen border-b-[3px] border-black overflow-hidden">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(0,0,0,.07)_1px,transparent_1px),linear-gradient(to_bottom,rgba(0,0,0,.07)_1px,transparent_1px)] bg-[size:38px_38px]"></div>

        <div class="relative max-w-7xl mx-auto px-6 py-16 min-h-screen flex items-center">
            <div class="grid lg:grid-cols-12 gap-10 items-center w-full">

                <div class="lg:col-span-7 fade-in">
                    <div class="flex gap-2 mb-8">
                        <span class="w-12 h-3 bg-black block"></span>
                        <span class="w-12 h-3 bg-marents-gold block"></span>
                        <span class="w-12 h-3 bg-black block"></span>
                    </div>

                    <p class="uppercase tracking-[0.35em] text-sm font-black text-black/60 mb-5">
                        Marents 
                    </p>

                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-black uppercase leading-[0.82]">
                        <span class="text-black">Marca tu</span><br>
                        <span class="text-marents-gold">camino</span><br>
                        <span class="text-black">con Marents</span>
                    </h1>

                    <p class="mt-7 text-xl md:text-2xl text-black/75 max-w-xl font-semibold">
                        Diseño, calidad y carácter en cada paso.
                    </p>

                    <div class="mt-9 flex flex-wrap gap-4">
                        <a href="/categoria/caballero"
                           class="bg-black text-white px-9 py-4 font-black uppercase border-[3px] border-black hover:bg-marents-gold hover:text-black transition">
                            Ver colección
                        </a>

                        <a href="#marca"
                           class="bg-white text-black px-9 py-4 font-black uppercase border-[3px] border-black hover:bg-black hover:text-white transition">
                            Más que zapatos
                        </a>
                    </div>
                </div>

                <!-- REELS -->
                <div class="lg:col-span-5 fade-in">
                    <div class="border-[3px] border-black bg-white p-5 shadow-[12px_12px_0_#000]">
                        <div class="flex items-center justify-between border-b-[3px] border-black pb-4 mb-5">
                            <p class="uppercase tracking-[0.25em] text-xs font-black">
                                Reels / TikToks
                            </p>
                            <p class="text-marents-gold font-black">01/02</p>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="border-[3px] border-black bg-[#f4f4f4] p-2">
                                <div class="aspect-[9/16] bg-gray-200 overflow-hidden">
                                    <video class="w-full h-full object-cover" autoplay muted loop playsinline>
                                        <source src="{{ asset('videos/reel_1.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                            </div>

                            <div class="border-[3px] border-black bg-[#f4f4f4] p-2 mt-10">
                                <div class="aspect-[9/16] bg-gray-200 overflow-hidden">
                                    <video class="w-full h-full object-cover" autoplay muted loop playsinline>
                                        <source src="{{ asset('videos/reel_2.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 bg-marents-gold border-[3px] border-black p-4">
                            <p class="font-black uppercase tracking-[0.2em] text-sm">
                                No sigas tendencias. Créalas.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- STRIPES -->
    <section class="bg-black text-white border-b-[3px] border-black">
        <div class="grid grid-cols-3">
            <div class="py-5 text-center font-black uppercase tracking-[0.25em] border-r-[3px] border-white/20">
                Diseño
            </div>
            <div class="py-5 text-center font-black uppercase tracking-[0.25em] text-marents-gold border-r-[3px] border-white/20">
                Calidad
            </div>
            <div class="py-5 text-center font-black uppercase tracking-[0.25em]">
                Carácter
            </div>
        </div>
    </section>

    <!-- COLECCIÓN -->
<div class="grid md:grid-cols-5 border-[3px] border-black">

    @foreach([

        [
            'titulo' => 'Mujer',
            'subtitulo' => 'RUN LINE NEGRO ROSADO',
            'img' => 'img/productos/mujer/Run_line_ negro_rosado_1_MUJER.jpeg',
            'img_hover' => 'img/productos/mujer/Run_line_negro_rosado_2_MUJER.jpeg',
            'url' => '/categoria/mujer',
        ],

        [
            'titulo' => 'Hombre',
            'subtitulo' => 'RUN LINE GRIS AZUL',
            'img' => 'img/productos/hombre/Run_line_gris_azul_1_HOMBRE.jpeg',
            'img_hover' => 'img/productos/hombre/Run_line_gris_azul_2_HOMBRE.jpeg',
            'url' => '/categoria/hombre',
        ],

        [
            'titulo' => 'Niños',
            'subtitulo' => 'CORAZONES',
            'img' => 'img/productos/niños/Corazones_1_NIÑA.jpeg',
            'img_hover' => 'img/productos/niños/Corazones_2_NIÑA.jpeg',
            'url' => '/categoria/ninos',
        ],

        [
            'titulo' => 'Outlet',
            'subtitulo' => 'CAPELLADA',
            'img' => 'img/productos/outlet/OUTLET_1_UNISEX.jpeg',
            'img_hover' => 'img/productos/outlet/OUTLET_1_HOMBRE.jpeg',
            'url' => '/categoria/outlet',
        ],

        [
            'titulo' => 'Pisa Huevos',
            'subtitulo' => 'Diseños personalizados',
            'img' => 'img/productos/pisa huevos/pisa_mafa_.jpeg',
            'img_hover' => 'img/productos/pisa huevos/pisa_mosaico_.jpeg',
            'url' => '/categoria/pisa-huevos',
        ],

    ] as $item)

    <a href="{{ url($item['url']) }}"
       class="bg-white p-5 block group border-black 
              border-b-[3px] md:border-b-0 md:border-r-[3px] 
              last:border-r-0 hover:bg-marents-gold transition-all duration-300">

        {{-- HEADER --}}
        <div class="flex items-center justify-between border-b-[3px] border-black pb-4 mb-5">

            <span class="font-black uppercase tracking-[0.2em] text-xs">
                {{ $item['subtitulo'] }}
            </span>

            <span class="text-2xl font-black group-hover:translate-x-1 transition">
                ↗
            </span>

        </div>

        {{-- IMAGEN --}}
        <div class="relative bg-[#f4f4f4] border-[3px] border-black 
                    min-h-[320px] flex items-center justify-center overflow-hidden">

            {{-- GRID FONDO --}}
            <div class="absolute inset-0
                bg-[linear-gradient(to_right,rgba(0,0,0,.05)_1px,transparent_1px),linear-gradient(to_bottom,rgba(0,0,0,.05)_1px,transparent_1px)]
                bg-[size:28px_28px]">
            </div>

            {{-- IMAGEN 1 --}}
            <img src="{{ asset($item['img']) }}"
                 alt="{{ $item['titulo'] }}"
                 class="absolute h-64 object-contain 
                        transition-all duration-500
                        opacity-100 group-hover:opacity-0
                        group-hover:scale-110">

            {{-- IMAGEN 2 --}}
            <img src="{{ asset($item['img_hover']) }}"
                 alt="{{ $item['titulo'] }}"
                 class="absolute h-64 object-contain
                        transition-all duration-500
                        opacity-0 group-hover:opacity-100
                        group-hover:scale-110">

        </div>

        {{-- TEXTO --}}
        <h3 class="text-3xl font-black uppercase mt-6">
            {{ $item['titulo'] }}
        </h3>

        <p class="text-black/65 mt-2 font-semibold">
            Explora la colección {{ strtolower($item['titulo']) }}.
        </p>

    </a>

    @endforeach

</div>

    <!-- MARCA -->
    <section id="marca" class="py-24 bg-black text-white border-b-[3px] border-black fade-in">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-12 gap-10 items-center">

                <div class="lg:col-span-5">
                    <p class="uppercase tracking-[0.35em] text-sm font-black text-white/50 mb-4">
               
                    </p>

                    <h2 class="text-5xl md:text-7xl font-black uppercase text-marents-gold leading-[0.85]">
                        Más que<br>
                        zapatos
                    </h2>
                </div>

                <div class="lg:col-span-7 border-[3px] border-white p-8 md:p-10">
                    <p class="text-xl md:text-2xl text-white/85 leading-relaxed font-semibold">
                        En Marents creamos calzado con identidad. Cada diseño combina estilo,
                        resistencia y personalidad para quienes quieren destacar en cada paso.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- PROCESO -->
    <section class="py-24 bg-white border-b-[3px] border-black fade-in">
        <div class="max-w-7xl mx-auto px-6">

            <div class="grid lg:grid-cols-2 gap-10 mb-12">
                <div>
                    <p class="uppercase tracking-[0.35em] text-sm font-black text-black/60 mb-4">
                        Proceso
                    </p>

                    <h2 class="text-5xl md:text-7xl font-black uppercase text-marents-gold leading-[0.85]">
                        Así nace<br>
                        cada par
                    </h2>
                </div>

                <div class="border-[3px] border-black p-6 bg-[#f5f5f5]">
                    <p class="text-xl text-black/75 leading-relaxed font-semibold">
                        Detalle, precisión y pasión en cada diseño.
                        Calidad real desde el primer corte hasta el acabado final.
                    </p>
                </div>
            </div>

            <div class="grid lg:grid-cols-12 gap-8">

                <div class="lg:col-span-5 border-[3px] border-black bg-[#f5f5f5] min-h-[470px] flex items-center justify-center p-8 shadow-[10px_10px_0_#EDE734]">
                    <div class="text-center">
                        <p class="uppercase tracking-[0.3em] text-xs font-black text-black/45 mb-4">
                            Video o fotos del proceso = pendiente
                        </p>

                        <h3 class="text-4xl font-black uppercase text-marents-gold">
                            Proceso Marents
                        </h3>

                        <p class="text-black/60 mt-4 font-semibold">
                            Taller, corte, armado o acabado.
                        </p>
                    </div>
                </div>

                <div class="lg:col-span-7 border-[3px] border-black divide-y-[3px] divide-black">
                    <div class="grid md:grid-cols-[130px_1fr]">
                        <div class="bg-marents-gold text-black p-6 text-5xl font-black border-r-[3px] border-black">
                            01
                        </div>
                        <div class="p-6">
                            <h3 class="text-3xl font-black uppercase">Detalle</h3>
                            <p class="text-black/65 mt-2 font-semibold">
                                Detalle, precisión y pasión en cada diseño.
                            </p>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-[130px_1fr]">
                        <div class="bg-black text-white p-6 text-5xl font-black border-r-[3px] border-black">
                            02
                        </div>
                        <div class="p-6">
                            <h3 class="text-3xl font-black uppercase">Precisión</h3>
                            <p class="text-black/65 mt-2 font-semibold">
                                Calidad real desde el primer corte.
                            </p>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-[130px_1fr]">
                        <div class="bg-marents-gold text-black p-6 text-5xl font-black border-r-[3px] border-black">
                            03
                        </div>
                        <div class="p-6">
                            <h3 class="text-3xl font-black uppercase">Acabado final</h3>
                            <p class="text-black/65 mt-2 font-semibold">
                                Hasta el acabado final, cada par refleja dedicación.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- DIFERENCIAL -->
    <section class="py-24 bg-[#f5f5f5] border-b-[3px] border-black fade-in">
        <div class="max-w-7xl mx-auto px-6">

            <p class="uppercase tracking-[0.35em] text-sm font-black text-black/60 mb-4">
                Diferencial
            </p>

            <h2 class="text-5xl md:text-7xl font-black uppercase text-marents-gold mb-12 leading-[0.9]">
                ¿Por qué<br>
                Marents?
            </h2>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 border-[3px] border-black">
                @foreach([
                    'Alta calidad',
                    'Diseño exclusivo',
                    'Hecho con dedicación',
                    'Comodidad garantizada'
                ] as $item)

                <div class="bg-white p-8 border-black border-b-[3px] sm:border-r-[3px] lg:border-b-0 hover:bg-black hover:text-white transition">
                    <div class="text-5xl font-black mb-8 text-marents-gold">
                        ✔
                    </div>

                    <h3 class="text-2xl font-black uppercase">
                        {{ $item }}
                    </h3>

                    <p class="mt-3 font-semibold opacity-70">
                        Un valor que se nota en cada detalle.
                    </p>
                </div>

                @endforeach
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
                    <a href="#" class="bg-black text-white p-6 text-2xl font-black uppercase border-[3px] border-black hover:bg-white hover:text-black transition">
                        Instagram ↗
                    </a>

                    <a href="#" class="bg-black text-white p-6 text-2xl font-black uppercase border-[3px] border-black hover:bg-white hover:text-black transition">
                        Facebook ↗
                    </a>

                    <a href="#" class="bg-black text-white p-6 text-2xl font-black uppercase border-[3px] border-black hover:bg-white hover:text-black transition">
                        TikTok ↗
                    </a>
                </div>

            </div>
        </div>
    </section>

</div>

<!-- LOGOS INSTITUCIONALES -->
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