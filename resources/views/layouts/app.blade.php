<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Marents')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" href="{{ asset('img/logo/logo_letras_negro.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body class="bg-white text-black font-['Inter'] overflow-x-hidden relative">

    <!-- 🔥 FONDO GLOBAL -->
    <div class="fixed inset-0 -z-10 overflow-hidden">

        <!-- BASE -->
        <div class="absolute inset-0 bg-white"></div>

        <!-- GRID CUADROS -->
        <div class="absolute inset-0
            bg-[linear-gradient(to_right,rgba(0,0,0,.05)_1px,transparent_1px),
            linear-gradient(to_bottom,rgba(0,0,0,.05)_1px,transparent_1px)]
            bg-[size:38px_38px]">
        </div>

        <!-- GLOW DORADO -->
        <div class="absolute top-[-200px] left-[-200px]
            w-[500px] h-[500px]
            bg-marents-gold/20
            rounded-full blur-[120px]">
        </div>

        <!-- GLOW NEGRO -->
        <div class="absolute bottom-[-250px] right-[-200px]
            w-[500px] h-[500px]
            bg-black/5
            rounded-full blur-[140px]">
        </div>

        <!-- LINEAS DECORATIVAS -->
        <div class="absolute top-[120px] left-0 w-full h-[3px] bg-black/5"></div>
        <div class="absolute bottom-[200px] left-0 w-full h-[3px] bg-black/5"></div>

    </div>

    <!-- 🔥 LINEA SUPERIOR -->
    <div class="w-full h-[6px] bg-marents-gold"></div>

    <!-- 🔥 NAVBAR -->
    @include('components.navbar')

    <!-- 🔥 BANNER -->
    @yield('banner')

    <!-- 🔥 CONTENIDO -->
    <main class="relative min-h-screen">
        @yield('content')
    </main>

    <!-- 🔥 FOOTER -->
    @include('components.footer')

    <!-- 🔥 FOOTER STRIP -->
    <div class="border-t-[3px] border-black bg-white py-3">
        <div class="max-w-7xl mx-auto px-6 flex items-center justify-between text-[10px] uppercase tracking-[0.25em] font-black text-black/40">

            <span>Marents Footwear</span>

            <div class="flex gap-2">
                <span class="w-8 h-[3px] bg-black block"></span>
                <span class="w-8 h-[3px] bg-marents-gold block"></span>
                <span class="w-8 h-[3px] bg-black block"></span>
            </div>

            <span>{{ date('Y') }}</span>

        </div>
    </div>

</body>
</html>