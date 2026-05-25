@php

    /*
    |--------------------------------------------------------------------------
    | CATEGORÍA ACTUAL
    |--------------------------------------------------------------------------
    */

    $categoriaActual = '';

    if (is_object($categoria ?? null)) {

        $categoriaActual = strtolower(
            $categoria->slug ?? $categoria->nombre ?? ''
        );

    } elseif (is_string($categoria ?? null)) {

        $categoriaActual = strtolower($categoria);

    }

    $categoriaActual = str_replace(' ', '-', $categoriaActual);

    /*
    |--------------------------------------------------------------------------
    | CONFIGURACIÓN DE BANNERS
    |--------------------------------------------------------------------------
    */

    $banners = [

        'hombre' => [

            'imagen' => asset('img/Baner/hombre.png'),

            'titulo' => 'Hombre',

            'texto' => 'Comodidad y estilo que te acompañan en cada paso.',

        ],

        'mujer' => [

            'imagen' => asset('img/Baner/mujer.png'),

            'titulo' => 'Mujer',

            'texto' => 'Donde hay actitud, hay estilo en cada paso.',

        ],

        'ninos' => [

            'imagen' => asset('img/Baner/niños.png'),

            'titulo' => 'Niños',

            'texto' => 'Cada paso acompaña sus primeras aventuras.',

        ],

        'niños' => [

            'imagen' => asset('img/Baner/niños.png'),

            'titulo' => 'Niños',

            'texto' => 'Cada paso acompaña sus primeras aventuras.',

        ],

        'pisa-huevos' => [

            'imagen' => asset('img/Baner/pisa_huevo.png'),

            'titulo' => 'Pisa Huevos',

            'texto' => 'Comodidad que se adapta a cada estilo. Personalizable o lista para usar.',

        ],

        'outlet' => [

            'imagen' => asset('img/Baner/Outlet.jpg'),

            'titulo' => 'Outlet',

            'texto' => 'Encuentra tu par ideal con precios especiales.',

        ],

    ];

    /*
    |--------------------------------------------------------------------------
    | DATOS ACTUALES
    |--------------------------------------------------------------------------
    */

    $data = $banners[$categoriaActual] ?? $banners['hombre'];

    $banner = $data['imagen'];

    $nombreCategoria = $data['titulo'];

    $descripcionBanner = $data['texto'];

@endphp

<section class="relative w-full h-[280px] sm:h-[380px] md:h-[500px] lg:h-[650px] overflow-hidden group">

    {{-- OVERLAY --}}
    <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/20 to-black/60 z-10"></div>

    {{-- EFECTOS --}}
    <div class="absolute -top-40 -left-40
                w-[400px] h-[400px]
                bg-marents-gold/20
                rounded-full blur-[120px]
                animate-pulse z-10">
    </div>

    <div class="absolute -bottom-40 -right-40
                w-[400px] h-[400px]
                bg-white/10
                rounded-full blur-[120px]
                animate-pulse z-10">
    </div>

    {{-- IMAGEN --}}
    <img
        src="{{ $banner }}"
        class="w-full h-full
               object-contain md:object-cover
               bg-black
               animate-bannerSlow"
        alt="{{ $nombreCategoria }}"
    >

    {{-- CAPA OSCURA --}}
    <div class="absolute inset-0 bg-black/30 z-10"></div>

    {{-- LINEAS --}}
    <div class="absolute top-0 left-0 w-full h-[6px] bg-marents-gold z-20"></div>

    <div class="absolute bottom-0 left-0 w-full h-[6px] bg-black/80 z-20"></div>

    {{-- GRID --}}
    <div class="absolute inset-0 opacity-10 z-10
        bg-[linear-gradient(to_right,white_1px,transparent_1px),
        linear-gradient(to_bottom,white_1px,transparent_1px)]
        bg-[size:40px_40px]">
    </div>

    {{-- CONTENIDO --}}
    <div class="absolute inset-0 flex items-center justify-center z-20 px-6">

        <div class="text-center max-w-4xl">

            <p class="uppercase tracking-[0.35em]
                      text-white/70
                      text-xs md:text-sm
                      font-black mb-5
                      animate-fadeUp">

                Colección Marents

            </p>

            <h1 class="text-white
                       text-4xl sm:text-5xl md:text-7xl lg:text-8xl
                       font-black uppercase
                       tracking-[0.08em]
                       drop-shadow-2xl
                       animate-fadeUp">

                {{ $nombreCategoria }}

            </h1>

            <div class="w-32 h-[5px]
                        bg-marents-gold
                        mx-auto mt-6 mb-8
                        animate-expand">
            </div>

            <p class="text-white/90
                      text-base sm:text-lg md:text-2xl
                      font-semibold
                      leading-relaxed
                      max-w-3xl mx-auto
                      animate-fadeUp">

                {{ $descripcionBanner }}

            </p>

        </div>

    </div>

</section>

<style>

@keyframes bannerSlow {

    0%{
        transform: scale(1.02);
    }

    50%{
        transform: scale(1.05);
    }

    100%{
        transform: scale(1.02);
    }

}

@keyframes fadeUp {

    0%{
        opacity:0;
        transform:translateY(40px);
    }

    100%{
        opacity:1;
        transform:translateY(0);
    }

}

@keyframes expand {

    0%{
        width:0;
        opacity:0;
    }

    100%{
        width:8rem;
        opacity:1;
    }

}

.animate-bannerSlow{
    animation: bannerSlow 12s ease-in-out infinite;
}

.animate-fadeUp{
    animation: fadeUp 1s ease forwards;
}

.animate-expand{
    animation: expand 1.2s ease forwards;
}

</style>