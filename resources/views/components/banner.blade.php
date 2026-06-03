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

<section class="relative w-full h-[220px] sm:h-[280px] md:h-[360px] lg:h-[430px] overflow-hidden bg-black">

    {{-- FONDO DIFUMINADO --}}
    <img
        src="{{ $banner }}"
        alt="{{ $nombreCategoria }}"
        class="absolute inset-0 w-full h-full object-cover blur-2xl scale-110 opacity-30"
    >

    {{-- OVERLAY --}}
    <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/30 to-black/70 z-10"></div>

    {{-- GRID --}}
    <div class="absolute inset-0 opacity-[0.06] z-10
        bg-[linear-gradient(to_right,#fff_1px,transparent_1px),
        linear-gradient(to_bottom,#fff_1px,transparent_1px)]
        bg-[size:40px_40px]">
    </div>

    {{-- GLOW IZQUIERDA --}}
    <div class="absolute -left-32 top-0
                w-[350px] h-[350px]
                bg-marents-gold/20
                rounded-full blur-[120px]
                z-10">
    </div>

    {{-- GLOW DERECHA --}}
    <div class="absolute -right-32 bottom-0
                w-[350px] h-[350px]
                bg-white/10
                rounded-full blur-[120px]
                z-10">
    </div>

    {{-- IMAGEN PRINCIPAL --}}
    <div class="absolute inset-0 flex items-center justify-center z-20">

        <img
            src="{{ $banner }}"
            alt="{{ $nombreCategoria }}"
            class="max-h-[90%]
                   max-w-[90%]
                   object-contain
                   animate-bannerFloat"
        >

    </div>

    {{-- CAPA OSCURA SUAVE --}}
    <div class="absolute inset-0 bg-black/15 z-20"></div>

    {{-- LINEA SUPERIOR --}}
    <div class="absolute top-0 left-0 w-full h-[5px] bg-marents-gold z-30"></div>

    {{-- LINEA INFERIOR --}}
    <div class="absolute bottom-0 left-0 w-full h-[5px] bg-black z-30"></div>

    {{-- CONTENIDO --}}
    <div class="absolute inset-0 flex items-center justify-center z-40 px-6">

        <div class="text-center max-w-4xl">

            <p class="uppercase tracking-[0.35em]
                      text-white/70
                      text-xs md:text-sm
                      font-black mb-3
                      animate-fadeUp">

                Colección Marents

            </p>

            <h1 class="text-white
                       text-3xl sm:text-4xl md:text-6xl lg:text-7xl
                       font-black uppercase
                       tracking-[0.08em]
                       drop-shadow-2xl
                       animate-fadeUp">

                {{ $nombreCategoria }}

            </h1>

            <div class="w-24 md:w-32 h-[5px]
                        bg-marents-gold
                        mx-auto mt-4 mb-5
                        animate-expand">
            </div>

            <p class="text-white/90
                      text-sm sm:text-base md:text-xl
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

@keyframes bannerFloat {

    0%{
        transform: translateY(0px) scale(1);
    }

    50%{
        transform: translateY(-8px) scale(1.02);
    }

    100%{
        transform: translateY(0px) scale(1);
    }

}

@keyframes fadeUp {

    from{
        opacity:0;
        transform:translateY(30px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }

}

@keyframes expand {

    from{
        width:0;
        opacity:0;
    }

    to{
        width:8rem;
        opacity:1;
    }

}

.animate-bannerFloat{
    animation: bannerFloat 8s ease-in-out infinite;
}

.animate-fadeUp{
    animation: fadeUp .9s ease forwards;
}

.animate-expand{
    animation: expand 1s ease forwards;
}

</style>