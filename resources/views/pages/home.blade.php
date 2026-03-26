@extends('layouts.app')

@section('title', 'Marents')

{{-- 🔥 BANNER --}}
@section('banner')
    @include('components.banner', [
        'imagen' => asset('banners/Banner_home.jpg'),
        'titulo' => ''
    ])
@endsection

@section('content')

{{-- 🔥 SCRIPT ANIMACIONES --}}
<script>
document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll(".fade-in");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    }, { threshold: 0.1 });

    elements.forEach(el => observer.observe(el));
});
</script>

<style>
.fade-in {
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.8s ease;
}
.fade-in.show {
    opacity: 1;
    transform: translateY(0);
}
</style>

<div class="max-w-7xl mx-auto py-10 px-4 space-y-20">

    {{-- 🔥 HERO TEXTO --}}
    <section class="text-center fade-in">

        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
            Estilo que marca diferencia 👟
        </h1>

        <p class="text-gray-400 mb-6 max-w-xl mx-auto">
            Descubre diseños únicos, personalizados y exclusivos en Marents
        </p>

        <a href="/categoria/caballero"
           class="bg-white text-black px-6 py-3 rounded-full font-semibold hover:bg-gray-200 transition">
            Ver productos
        </a>

    </section>

    {{-- 🔥 CATEGORÍAS --}}
    <section class="fade-in">

        <h2 class="text-2xl font-bold mb-6">Categorías</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

            @foreach ([
                ['nombre'=>'Caballero','url'=>'/categoria/caballero'],
                ['nombre'=>'Dama','url'=>'/categoria/dama'],
                ['nombre'=>'Niños','url'=>'/categoria/ninos'],
                ['nombre'=>'Personalizados','url'=>'/personalizados/vans']
            ] as $cat)

                <a href="{{ $cat['url'] }}"
                   class="bg-white/5 border border-white/10 rounded-2xl p-6 text-center hover:bg-white/10 hover:scale-105 transition">

                    <h3 class="text-lg font-semibold">{{ $cat['nombre'] }}</h3>

                </a>

            @endforeach

        </div>

    </section>

    {{-- 🔥 PRODUCTOS --}}
    <section class="fade-in">

        <h2 class="text-2xl font-bold mb-6">Destacados</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

            @foreach ([
                ['nombre'=>'Bolichero','img'=>'img/productos/caballero/bolichero_negro.png'],
                ['nombre'=>'Cool','img'=>'img/productos/caballero/cool.png'],
                ['nombre'=>'Tractor','img'=>'img/productos/caballero/tractor_blanco_a.png'],
                ['nombre'=>'Bigotes','img'=>'img/productos/caballero/bigotes_negro.png'],
            ] as $p)

                <div class="bg-white/5 border border-white/10 rounded-2xl p-4 hover:scale-105 transition">

                    <img src="{{ asset($p['img']) }}"
                         class="w-full h-40 object-contain mb-4">

                    <h3 class="font-semibold">{{ $p['nombre'] }}</h3>
                    <p class="text-sm text-gray-400">$79.999</p>

                </div>

            @endforeach

        </div>

    </section>

    {{-- 🔥 BENEFICIOS --}}
    <section class="grid md:grid-cols-3 gap-6 text-center fade-in">

        <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:scale-105 transition">
            🚚
            <p class="mt-2 font-semibold">Envíos a todo el país</p>
            <p class="text-gray-400 text-sm">Rápido y seguro</p>
        </div>

        <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:scale-105 transition">
            🎨
            <p class="mt-2 font-semibold">Diseños personalizados</p>
            <p class="text-gray-400 text-sm">Únicos como tú</p>
        </div>

        <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:scale-105 transition">
            🔒
            <p class="mt-2 font-semibold">Pago seguro</p>
            <p class="text-gray-400 text-sm">Protección garantizada</p>
        </div>

    </section>

    {{-- 🔥 VALORES + MISIÓN --}}
    <section class="space-y-12 fade-in">

        <div class="text-center">
            <h2 class="text-3xl font-bold mb-4">Nuestra esencia</h2>

            <p class="text-gray-400 max-w-2xl mx-auto">
                En Marents no solo vendemos calzado, construimos experiencias basadas en confianza,
                innovación y cercanía con nuestros clientes.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">

            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:scale-105 transition">
                <h3 class="font-bold text-lg mb-2">Transparencia</h3>
                <p class="text-gray-400 text-sm">
                    Información clara y honesta que genera confianza.
                </p>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:scale-105 transition">
                <h3 class="font-bold text-lg mb-2">Innovación</h3>
                <p class="text-gray-400 text-sm">
                    Evolucionamos constantemente con el mercado.
                </p>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:scale-105 transition">
                <h3 class="font-bold text-lg mb-2">Empatía</h3>
                <p class="text-gray-400 text-sm">
                    Escuchamos y entendemos a nuestros clientes.
                </p>
            </div>

        </div>

        <div class="bg-white/5 border border-white/10 rounded-2xl p-8 text-center">

            <h3 class="text-2xl font-bold mb-4">Nuestra misión</h3>

            <p class="text-gray-400 max-w-3xl mx-auto leading-relaxed">
                Ofrecer calzado casual de calidad, combinando estilo, comodidad y accesibilidad,
                brindando una experiencia de compra confiable y cercana.
            </p>

        </div>

    </section>

    {{-- 🔥 CTA --}}
    <section class="text-center fade-in">

        <h2 class="text-3xl font-bold mb-4">
            Crea tu propio estilo
        </h2>

        <p class="text-gray-400 mb-6">
            Diseña tus zapatos únicos y destaca donde vayas
        </p>

        <a href="/personalizados/vans"
           class="bg-white text-black px-8 py-3 rounded-full font-semibold hover:bg-gray-200 transition">
            Personalizar ahora
        </a>

    </section>

</div>

@endsection