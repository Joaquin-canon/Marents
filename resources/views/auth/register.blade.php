
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - Marents</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('img/logo/logo_letras_negro.png') }}">
</head>

<body class="bg-gray-100">

<div class="min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">

        <!-- LOGO -->
        <div class="flex justify-center mb-6">
            <img src="{{ asset('img/logo/logo_letras_negro.png') }}" alt="Logo" class="h-14">
        </div>

        <!-- TITULO -->
        <h2 class="text-2xl font-bold text-center mb-2">
            Crear cuenta 👟
        </h2>

        <p class="text-center text-gray-500 mb-6">
            Regístrate para comprar tus zapatos
        </p>

        <!-- ERRORES -->
        @if ($errors->any())
            <div class="mb-4 text-red-500 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- NOMBRES -->
            <div class="mb-4">
                <label class="block text-sm mb-1">Nombres</label>
                <input type="text" name="nombres"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black"
                    required>
            </div>

            <!-- APELLIDOS -->
            <div class="mb-4">
                <label class="block text-sm mb-1">Apellidos</label>
                <input type="text" name="apellidos"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black"
                    required>
            </div>

            <!-- DOCUMENTO -->
            <div class="mb-4">
                <label class="block text-sm mb-1">Documento</label>
                <input type="text" name="documento"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black">
            </div>

            <!-- CELULAR -->
            <div class="mb-4">
                <label class="block text-sm mb-1">Celular</label>
                <input type="text" name="celular"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black">
            </div>

            <!-- EMAIL -->
            <div class="mb-4">
                <label class="block text-sm mb-1">Correo electrónico</label>
                <input type="email" name="email"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black"
                    required>
            </div>

            <!-- PASSWORD -->
            <div class="mb-4">
                <label class="block text-sm mb-1">Contraseña</label>
                <input type="password" name="password"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black"
                    required>
            </div>

            <!-- CONFIRM PASSWORD -->
            <div class="mb-4">
                <label class="block text-sm mb-1">Confirmar contraseña</label>
                <input type="password" name="password_confirmation"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black"
                    required>
            </div>

            <!-- BOTON -->
            <button type="submit"
                class="w-full bg-black text-white py-2 rounded-lg hover:bg-gray-800 transition">
                Registrarse
            </button>

            <!-- LOGIN -->
            <p class="text-center text-sm text-gray-500 mt-6">
                ¿Ya tienes cuenta?
                <a href="{{ route('login') }}" class="text-black font-semibold hover:underline">
                    Inicia sesión
                </a>
            </p>

        </form>

    </div>

</div>

</body>
</html>