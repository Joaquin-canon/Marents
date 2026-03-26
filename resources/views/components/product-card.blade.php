<div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-4 
            hover:scale-105 hover:bg-white/10 transition duration-300">

    {{-- IMAGEN --}}
    <div class="flex justify-center">
        <img src="{{ asset($imagen) }}"
             class="h-[200px] object-contain transition-transform duration-300 group-hover:scale-105">
    </div>

    {{-- INFO --}}
    <div class="mt-4 space-y-1">

        {{-- NOMBRE --}}
        <h3 class="font-semibold text-lg text-white">
            {{ $nombre }}
        </h3>

        {{-- TALLAS --}}
        <p class="text-gray-400 text-sm">
            Tallas: {{ $tallas }}
        </p>

        {{-- PRECIO --}}
        <p class="mt-2 font-bold text-white">
            ${{ number_format($precio, 0, ',', '.') }}
        </p>

    </div>

</div>