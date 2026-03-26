<nav class="bg-black/90 backdrop-blur-xl border-b border-white/10 sticky top-0 z-50">

    <div class="max-w-7xl mx-auto px-8 py-5 flex justify-between items-center">

        {{-- 🔥 LOGO GRANDE --}}
        <a href="/" class="text-3xl font-extrabold tracking-widest text-white hover:scale-105 transition">
            Marents
        </a>

        {{-- 🔥 LINKS --}}
        <div class="hidden md:flex items-center space-x-10 text-base font-semibold">

            <a href="/" class="nav-link-strong">Home</a>
            <a href="/categoria/caballero" class="nav-link-strong">Caballero</a>
            <a href="/categoria/dama" class="nav-link-strong">Dama</a>
            <a href="/categoria/ninos" class="nav-link-strong">Niños</a>

            <a href="/personalizados/pisa-huevos" class="nav-link-strong">Pisa huevos</a>
            <a href="/personalizados/vans" class="nav-link-strong">Vans</a>
            <a href="/personalizados/botas" class="nav-link-strong">Botas</a>

        </div>

        {{-- 🔥 USUARIO --}}
        <div class="flex items-center space-x-4">

            @auth
                <div class="flex items-center space-x-3 bg-white/10 px-4 py-2 rounded-full border border-white/20 hover:bg-white/20 transition">

                    <div class="w-9 h-9 bg-white text-black flex items-center justify-center rounded-full font-bold">
                        {{ strtoupper(substr(auth()->user()->nombres,0,1)) }}
                    </div>

                    <span class="text-white font-medium">
                        {{ auth()->user()->nombres }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="text-xs text-red-400 hover:text-red-600 ml-2">
                            Salir
                        </button>
                    </form>

                </div>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="text-gray-300 hover:text-white text-base transition">
                    Iniciar sesión
                </a>

                {{-- 🔥 BOTÓN ANIMADO PRO --}}
                <a href="{{ route('register') }}"
                   class="relative px-6 py-2.5 rounded-full font-semibold text-black bg-white overflow-hidden group">

                    <span class="relative z-10">Registrarse</span>

                    <span class="absolute inset-0 bg-black scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-300"></span>

                    <span class="absolute inset-0 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition">
                        Registrarse
                    </span>

                </a>
            @endguest

        </div>

    </div>

</nav>