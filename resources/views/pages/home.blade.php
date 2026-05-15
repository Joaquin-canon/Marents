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
<!-- REELS -->
<div class="lg:col-span-5 fade-in">
    <div class="border-[3px] border-black bg-white p-5 shadow-[12px_12px_0_#000]">

        <div class="flex items-center justify-between border-b-[3px] border-black pb-4 mb-5">
            <p class="uppercase tracking-[0.25em] text-xs font-black">
                Reels / Instagram
            </p>
            <p class="text-marents-gold font-black">ACTUAL</p>
        </div>

        <!-- INSTAGRAM REEL -->
        <div class="border-[3px] border-black bg-[#f4f4f4] p-2">

            <div class="aspect-[9/16] overflow-hidden">

                <blockquote class="instagram-media w-full h-full"
                    data-instgrm-permalink="https://www.instagram.com/p/DMglzrnOfFF/"
                    data-instgrm-version="14"
                    style="width:100%; height:100%; min-width:0;">
                </blockquote>

            </div>

        </div>

        <!-- caption -->
        <div class="mt-5 bg-marents-gold border-[3px] border-black p-4">
            <p class="font-black uppercase tracking-[0.2em] text-sm">
                No sigas tendencias. Créalas.
            </p>
        </div>

    </div>
</div>

<!-- Instagram embed script -->
<script async src="https://www.instagram.com/embed.js"></script>
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

            <!-- VIDEO FACEBOOK REEL -->
            <div class="lg:col-span-5 border-[3px] border-black bg-[#f5f5f5] min-h-[470px] flex items-center justify-center p-4 shadow-[10px_10px_0_#EDE734]">

                <div class="w-full h-full">

                    <p class="uppercase tracking-[0.3em] text-xs font-black text-black/45 mb-4 text-center">
                        Proceso real Marents
                    </p>

                    <!-- Facebook SDK -->
                    <div id="fb-root"></div>

                    <script async defer crossorigin="anonymous"
                        src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v20.0">
                    </script>

                    <!-- Reel embed -->
                    <div class="fb-video w-full"
                        data-href="https://www.facebook.com/reel/296935049953249"
                        data-width="500"
                        data-show-text="false">
                    </div>

                </div>

            </div>

            <!-- PASOS -->
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