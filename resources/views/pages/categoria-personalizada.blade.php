@extends('layouts.app')

@section('content')

<section class="py-14 md:py-20 bg-gradient-to-b from-gray-100 to-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        {{-- HERO --}}
        <div class="text-center mb-14 md:mb-20 scroll-anim">

            <span class="inline-block bg-black text-white px-4 py-2 text-xs sm:text-sm font-black uppercase tracking-[0.2em] mb-5">
                Colección Especial
            </span>

            <h1 class="text-4xl sm:text-5xl md:text-6xl xl:text-7xl font-black uppercase leading-[0.95] text-black mb-6">

                Pisa Huevos <br>

                <span class="text-marents-gold">
                    Exclusivos y Personalizados
                </span>

            </h1>

            <p class="text-gray-600 max-w-4xl mx-auto text-base sm:text-lg md:text-xl font-semibold leading-relaxed">

                Descubre nuestros modelos especiales listos para usar
                o personaliza cualquier diseño con nombres, colores,
                dibujos y detalles únicos hechos especialmente para ti.

            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">

                <a href="#productos"
                   class="bg-black text-white px-8 py-4 font-black uppercase hover:bg-marents-gold hover:text-black transition duration-300 shadow-lg text-center">

                    Ver modelos especiales

                </a>

                <a href="#personalizacion"
                   class="border-[3px] border-black px-8 py-4 font-black uppercase hover:bg-black hover:text-white transition duration-300 text-center">

                    Cómo personalizar

                </a>

            </div>

        </div>

        {{-- GALERÍA --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-20 scroll-anim">

            <img src="{{ asset('img/productos/pisa_huevos/personalizado_1.jpeg') }}"
                 class="h-44 md:h-56 w-full object-cover rounded-2xl border-[3px] border-black shadow-lg hover:scale-105 transition duration-300">

            <img src="{{ asset('img/productos/pisa_huevos/personalizado(2).jpeg') }}"
                 class="h-44 md:h-56 w-full object-cover rounded-2xl border-[3px] border-black shadow-lg hover:scale-105 transition duration-300">

            <img src="{{ asset('img/productos/pisa_huevos/plantila_perso_2.jpeg') }}"
                 class="h-44 md:h-56 w-full object-cover rounded-2xl border-[3px] border-black shadow-lg hover:scale-105 transition duration-300">

            <img src="{{ asset('img/productos/pisa_huevos/plantila_perso.jpeg') }}"
                 class="h-44 md:h-56 w-full object-cover rounded-2xl border-[3px] border-black shadow-lg hover:scale-105 transition duration-300">

        </div>

        {{-- DIFERENCIA --}}
        <div class="grid lg:grid-cols-2 gap-8 mb-24 scroll-anim">

            {{-- PRODUCTOS ESPECIALES --}}
            <div class="border-[3px] border-black bg-white p-8 md:p-10 shadow-[8px_8px_0_#000]">

                <span class="inline-block bg-black text-white px-4 py-2 text-xs font-black uppercase tracking-[0.2em] mb-6">
                    Modelos exclusivos
                </span>

                <h2 class="text-3xl md:text-5xl font-black uppercase leading-none mb-6">

                    Productos <br>
                    especiales

                </h2>

                <p class="text-gray-600 text-lg font-semibold leading-relaxed mb-8">

                    Contamos con diseños únicos ya creados por Marents,
                    listos para comprar y destacar desde el primer paso.

                </p>

                <ul class="space-y-4 font-black uppercase text-sm tracking-[0.15em]">

                    <li>✔ Diseños exclusivos</li>
                    <li>✔ Ediciones especiales</li>
                    <li>✔ Estilo único Marents</li>
                    <li>✔ Listos para pedir</li>

                </ul>

            </div>

            {{-- PERSONALIZACIÓN --}}
            <div id="personalizacion"
                 class="border-[3px] border-black bg-marents-gold p-8 md:p-10 shadow-[8px_8px_0_#000]">

                <span class="inline-block bg-black text-white px-4 py-2 text-xs font-black uppercase tracking-[0.2em] mb-6">
                    Personalización
                </span>

                <h2 class="text-3xl md:text-5xl font-black uppercase leading-none mb-6">

                    Convierte cualquier <br>
                    par en algo único

                </h2>

                <p class="text-black text-lg font-semibold leading-relaxed mb-8">

                    También puedes tomar cualquier modelo base y personalizarlo
                    completamente con nombres, frases, colores, personajes,
                    dibujos o ideas propias.

                </p>

                <ul class="space-y-4 font-black uppercase text-sm tracking-[0.15em]">

                    <li>✔ Nombres personalizados</li>
                    <li>✔ Colores exclusivos</li>
                    <li>✔ Diseños únicos</li>
                    <li>✔ Hecho a tu gusto</li>

                </ul>

            </div>

        </div>

        {{-- FRASE --}}
        <div class="bg-black text-white border-[3px] border-black p-8 md:p-12 mb-16 md:mb-24 relative overflow-hidden scroll-anim">

            <div class="absolute top-0 right-0 w-40 h-40 bg-marents-gold opacity-20 rounded-full blur-3xl"></div>

            <div class="relative z-10">

                <p class="text-xl sm:text-2xl md:text-4xl font-black uppercase leading-tight text-center">
                    “Tu estilo no se copia. <br class="hidden md:block">
                    Se crea.”
                </p>

            </div>

        </div>

        {{-- PRODUCTOS --}}
        <div id="productos" class="mb-20 scroll-anim">

            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-10">

                <div>

                    <p class="uppercase tracking-[0.3em] text-sm font-black text-gray-500 mb-3">
                        Colección Marents
                    </p>

                    <h2 class="text-3xl md:text-5xl font-black uppercase text-black">
                        Productos especiales y modelos base
                    </h2>

                </div>

                <p class="text-gray-600 font-semibold max-w-xl">
                    Elige un diseño exclusivo Marents o toma cualquier modelo base
                    para crear una versión completamente personalizada.
                </p>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8">

                @forelse($productos as $producto)

                    @php

                        $imagenDB = $producto->imagenes->first()?->url;

                        if ($imagenDB) {

                            $imagenDB = str_replace('\\', '/', $imagenDB);

                            if (!str_contains($imagenDB, 'img/')) {
                                $imagenDB = 'img/' . ltrim($imagenDB, '/');
                            }

                            $imagenDB = str_replace('pisa huevos', 'pisa_huevos', $imagenDB);
                        }

                        $imagen = $imagenDB;

                        $precio = $producto->variaciones
                                    ->where('stock', '>', 0)
                                    ->avg('precio');

                    @endphp

                    <div class="group scroll-anim border-[3px] border-black bg-white shadow-[6px_6px_0_#000] hover:shadow-[10px_10px_0_#EDE734] transition duration-300 flex flex-col overflow-hidden">

                        <div class="relative overflow-hidden bg-gray-100">

                            <img
                                src="{{ $imagen ? asset($imagen) : asset('img/default.png') }}"
                                class="w-full h-64 md:h-72 object-contain p-4 md:p-6 group-hover:scale-105 transition duration-500"
                                alt="{{ $producto->modelo->nombre ?? 'Producto' }}"
                            >

                

                        </div>

                        <div class="p-5 md:p-6 flex flex-col flex-1">

                            <h3 class="text-xl md:text-2xl font-black uppercase mb-3 leading-tight">
                                {{ $producto->modelo->nombre ?? 'Sin nombre' }}
                            </h3>

                            <p class="text-gray-600 font-semibold text-sm leading-relaxed mb-5">
                                Personaliza este modelo con colores, nombres,
                                frases o diseños únicos hechos para ti.
                            </p>

                            <div class="mb-4">

                                <p class="text-sm uppercase tracking-widest text-gray-500 font-bold">
                                    Desde
                                </p>

                                <p class="text-2xl md:text-3xl font-black text-black">
                                    ${{ number_format($precio ?? 0) }}
                                </p>

                            </div>

                            <div class="mb-6">

                                <p class="text-xs uppercase tracking-[0.2em] text-gray-500 font-black mb-2">
                                    Tallas disponibles
                                </p>

                                <div class="flex flex-wrap gap-2">

                                    @foreach($producto->variaciones->pluck('talla.numero')->unique() as $talla)

                                        <span class="border-2 border-black px-3 py-1 text-sm font-black">
                                            {{ $talla }}
                                        </span>

                                    @endforeach

                                </div>

                            </div>

                            <div class="mt-auto flex flex-col sm:flex-row gap-3">

                                <a href="https://api.whatsapp.com/send/?phone=573045332113&text=Hola%20quiero%20personalizar%20el%20modelo%20{{ urlencode($producto->modelo->nombre ?? '') }}"
                                   class="flex-1 text-center bg-black text-white py-3 px-4 uppercase font-black hover:bg-marents-gold hover:text-black transition duration-300">

                                    Personalizar

                                </a>

                                <a href="{{ url('/producto/' . $producto->id) }}"
                                   class="flex-1 text-center border-[3px] border-black py-3 px-4 uppercase font-black hover:bg-black hover:text-white transition duration-300">

                                    Ver más

                                </a>

                            </div>

                        </div>

                    </div>

                @empty

                    <div class="col-span-full border-[3px] border-black bg-white py-20 px-6 text-center">

                        <h3 class="text-3xl font-black uppercase text-marents-gold mb-4">
                            Próximamente nuevos modelos
                        </h3>

                        <p class="text-gray-600 font-semibold">
                            Estamos preparando nuevos diseños personalizados para ti.
                        </p>

                    </div>

                @endforelse

            </div>

        </div>

        {{-- PASOS --}}
        <div class="mb-24 scroll-anim">

            <div class="text-center mb-14">

                <p class="uppercase tracking-[0.3em] text-sm font-black text-gray-500 mb-3">
                    Personalización
                </p>

                <h2 class="text-4xl md:text-6xl font-black uppercase">
                    ¿Cómo funciona?
                </h2>

            </div>

            <div class="grid md:grid-cols-3 gap-8">

                <div class="bg-white border-[3px] border-black p-8 shadow-[6px_6px_0_#000]">

                    <div class="w-16 h-16 bg-black text-white flex items-center justify-center text-2xl font-black mb-6">
                        1
                    </div>

                    <h3 class="text-2xl font-black uppercase mb-4">
                        Elige un modelo
                    </h3>

                    <p class="text-gray-600 font-semibold leading-relaxed">
                        Selecciona uno de nuestros productos especiales
                        o un modelo base para personalizar.
                    </p>

                </div>

                <div class="bg-marents-gold border-[3px] border-black p-8 shadow-[6px_6px_0_#000]">

                    <div class="w-16 h-16 bg-black text-white flex items-center justify-center text-2xl font-black mb-6">
                        2
                    </div>

                    <h3 class="text-2xl font-black uppercase mb-4">
                        Personalízalo
                    </h3>

                    <p class="text-black font-semibold leading-relaxed">
                        Agrega nombres, colores, dibujos,
                        frases o cualquier detalle único.
                    </p>

                </div>

                <div class="bg-white border-[3px] border-black p-8 shadow-[6px_6px_0_#000]">

                    <div class="w-16 h-16 bg-black text-white flex items-center justify-center text-2xl font-black mb-6">
                        3
                    </div>

                    <h3 class="text-2xl font-black uppercase mb-4">
                        Lo hacemos realidad
                    </h3>

                    <p class="text-gray-600 font-semibold leading-relaxed">
                        Fabricamos tu par personalizado con acabados únicos y máxima calidad.
                    </p>

                </div>

            </div>

        </div>

        {{-- CTA --}}
        <div class="relative overflow-hidden bg-black text-white border-[3px] border-black p-10 md:p-16 text-center scroll-anim">

            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 left-0 w-72 h-72 bg-marents-gold rounded-full blur-3xl"></div>
            </div>

            <div class="relative z-10">

                <p class="uppercase tracking-[0.3em] text-sm font-black text-marents-gold mb-4">
                    Diseños únicos
                </p>

                <h2 class="text-4xl md:text-6xl font-black uppercase leading-[0.95] mb-6">
                    Crea algo <br>
                    que nadie más tenga
                </h2>

                <p class="text-gray-300 max-w-2xl mx-auto text-lg mb-8 leading-relaxed">
                    Escríbenos por WhatsApp y empieza a diseñar unos Pisa Huevos únicos hechos especialmente para ti.
                </p>

                <a href="https://api.whatsapp.com/send/?phone=573045332113&text=Hola%20quiero%20personalizar%20mis%20Pisa%20Huevos"
                   class="inline-block bg-marents-gold text-black px-10 py-5 font-black uppercase text-lg hover:bg-white transition duration-300 shadow-2xl">

                    Empezar personalización

                </a>

            </div>

        </div>

    </div>

</section>

{{-- ANIMACIONES --}}
<style>

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