<nav class="bg-black text-white border-b-[3px] border-black sticky top-0 z-50">

    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- LOGO ORIGINAL -->
        <a href="/" class="flex items-center">
            <img src="{{ asset('img/logo/logo_letras_blanco.png') }}"
                 alt="Marents"
                 class="h-10 md:h-12 object-contain">
        </a>

        <!-- LINKS DESKTOP -->
        <div class="hidden md:flex items-center gap-8 lg:gap-10 text-sm lg:text-base font-black uppercase tracking-wide">

            <a href="/" class="nav-marents-link">Home</a>
            <a href="/categoria/hombre" class="nav-marents-link">Hombre</a>
            <a href="/categoria/mujer" class="nav-marents-link">Mujer</a>
            <a href="/categoria/ninos" class="nav-marents-link">Niños</a>
            <a href="{{ url('/pisa-huevos') }}" class="nav-marents-link">
                Pisa huevos
            </a>
            <a href="/categoria/outlet" class="nav-marents-link text-marents-gold">Outlet</a>

        </div>

        <!-- DERECHA -->
        <div class="flex items-center gap-5">

            <!-- FAVORITOS -->
            <a href="/favoritos" class="nav-icon-marents">
                ❤
            </a>

            <!-- CARRITO -->
            <a href="/carrito" class="nav-icon-marents">
                🛒
            </a>

            @guest
                <a href="{{ route('login') }}" class="hidden md:block nav-marents-link">Login</a>
            @endguest

            <!-- MOBILE BTN -->
            <button id="btnMenu" class="md:hidden text-3xl font-black hover:text-marents-gold transition">
                ☰
            </button>

        </div>
    </div>

    <!-- MENU MOBILE -->
    <div id="menuMobile"
         class="hidden md:hidden bg-black border-t-[3px] border-marents-gold px-6 py-5 space-y-4 text-white uppercase font-black">

        <a href="/" class="mobile-marents-link">Home</a>
        <a href="/categoria/hombre" class="mobile-marents-link">Hombre</a>
        <a href="/categoria/mujer" class="mobile-marents-link">Mujer</a>
        <a href="/categoria/ninos" class="mobile-marents-link">Niños</a>
        <a href="{{ url('/categoria/pisa-huevos') }}" class="mobile-marents-link">Pisa huevos</a>
        <a href="/categoria/outlet" class="mobile-marents-link text-marents-gold">Outlet</a>

        @guest
            <a href="{{ route('login') }}" class="mobile-marents-link">Login</a>
            <a href="{{ route('register') }}" class="mobile-marents-link">Register</a>
        @endguest
    </div>

</nav>

<style>
    nav {
        transition: all .3s ease;
    }

    nav:hover {
        box-shadow: 0 8px 0 #EDE734;
    }

    .nav-marents-link {
        position: relative;
        padding: 8px 0;
        transition: color .3s ease;
    }

    .nav-marents-link::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -6px;
        width: 0;
        height: 3px;
        background: #EDE734;
        transition: width .3s ease;
    }

    .nav-marents-link:hover {
        color: #EDE734;
    }

    .nav-marents-link:hover::after {
        width: 100%;
    }

    .nav-icon-marents {
        font-size: 22px;
        transition: transform .25s ease, color .25s ease;
    }

    .nav-icon-marents:hover {
        color: #EDE734;
        transform: translateY(-3px) scale(1.12);
    }

    .mobile-marents-link {
        display: block;
        border-bottom: 1px solid rgba(255,255,255,.15);
        padding-bottom: 12px;
        transition: all .25s ease;
    }

    .mobile-marents-link:hover {
        color: #EDE734;
        padding-left: 10px;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const btnMenu = document.getElementById('btnMenu');
    const menuMobile = document.getElementById('menuMobile');

    if (btnMenu && menuMobile) {
        btnMenu.addEventListener('click', () => {
            menuMobile.classList.toggle('hidden');
        });
    }
});
</script>