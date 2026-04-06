<div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 cursor-pointer">

    {{-- IMAGEN --}}
    <div class="relative bg-gray-100 aspect-square overflow-hidden">

        <img src="{{ asset($imagen) }}"
             class="w-full h-full object-contain transition duration-500 group-hover:scale-105">

        {{-- FAVORITO --}}
        <button class="absolute top-3 right-3 bg-white/80 backdrop-blur p-2 rounded-full shadow hover:scale-110 transition">
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-5 h-5 text-gray-700"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                      d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364 4.318 12.682a4.5 4.5 0 010-6.364z"/>
            </svg>
        </button>

    </div>

    {{-- INFO --}}
    <div class="p-4 space-y-1">

        {{-- PRECIO --}}
        <p class="text-lg font-bold text-black">
            ${{ number_format($precio, 0, ',', '.') }}
        </p>

        {{-- NOMBRE --}}
        <p class="text-sm font-semibold text-gray-800 leading-tight line-clamp-2">
            {{ $nombre }}
        </p>

        {{-- SUBTEXTO --}}
        <p class="text-xs text-gray-500">
            Performance
        </p>

        {{-- TALLAS MINI --}}
        <div class="flex flex-wrap gap-1 mt-2">
            @foreach(explode(',', $tallas) as $t)
                <span class="text-[10px] border px-1.5 py-0.5 rounded">
                    {{ trim($t) }}
                </span>
            @endforeach
        </div>

    </div>

</div>