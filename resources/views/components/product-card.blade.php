<a href="{{ url('/producto/' . $id) }}" class="block group">

    <div class="bg-white text-black border-[3px] border-black 
                transition-all duration-300 
                hover:-translate-y-1 
                hover:shadow-[10px_10px_0_#000]">

        {{-- IMAGEN --}}
        <div class="relative bg-white aspect-square flex items-center justify-center overflow-hidden border-b-[3px] border-black">

            {{-- IMAGEN PRINCIPAL --}}
            <img 
                src="{{ asset($imagen ?: 'img/default.png') }}"
                alt="{{ $nombre }}"
                class="absolute h-[75%] object-contain 
                       transition duration-500 
                       opacity-100 
                       group-hover:opacity-0 
                       group-hover:scale-110">

            {{-- IMAGEN HOVER --}}
            @if(!empty($imagen_hover))
                <img 
                    src="{{ asset($imagen_hover) }}"
                    alt="{{ $nombre }}"
                    class="absolute h-[75%] object-contain 
                           transition duration-500 
                           opacity-0 
                           group-hover:opacity-100 
                           group-hover:scale-110">
            @endif

            {{-- FAVORITO --}}
            <button type="button"
                onclick="event.preventDefault(); event.stopPropagation();"
                class="absolute top-3 right-3 bg-white border-2 border-black 
                       p-2 text-sm 
                       hover:bg-marents-gold hover:scale-110 transition">
                ❤️
            </button>

        </div>

        {{-- INFO --}}
        <div class="bg-white p-4 space-y-3">

            {{-- PRECIO --}}
            <p class="text-xl font-black 
                {{ ($categoria ?? '') === 'mujer' ? 'text-marents-gold' : 'text-black' }}">
                ${{ number_format($precio ?? 0, 0, ',', '.') }}
            </p>

            {{-- NOMBRE --}}
            <p class="text-sm font-black uppercase leading-tight text-black">
                {{ $nombre }}
            </p>

            <p class="text-[10px] uppercase tracking-[0.2em] text-black/50 font-black">
                Marents
            </p>

            {{-- COLORES --}}
            @if(!empty($color1) || !empty($color2))
                <div class="pt-2 border-t border-black/20">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-black/50 font-black mb-2">
                        Colores
                    </p>

                    <div class="flex flex-wrap items-center gap-2">
                        @if(!empty($color1))
                            <div class="flex items-center gap-1 border border-black px-2 py-1 bg-white">
                                <span class="w-4 h-4 border border-black"
                                      style="background: {{ $color1_hex ?? '#ddd' }}"></span>
                                <span class="text-[10px] font-black uppercase text-black">
                                    {{ $color1 }}
                                </span>
                            </div>
                        @endif

                        @if(!empty($color2))
                            <div class="flex items-center gap-1 border border-black px-2 py-1 bg-white">
                                <span class="w-4 h-4 border border-black"
                                      style="background: {{ $color2_hex ?? '#ddd' }}"></span>
                                <span class="text-[10px] font-black uppercase text-black">
                                    {{ $color2 }}
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            {{-- TALLAS --}}
            <div class="flex flex-wrap gap-1 pt-2 border-t border-black/20">

                @foreach(explode(',', $tallas ?? '') as $t)
                    @if(trim($t) !== '')
                        <span class="text-[10px] border border-black px-2 py-0.5 font-bold bg-white text-black">
                            {{ trim($t) }}
                        </span>
                    @endif
                @endforeach

            </div>

        </div>

    </div>

</a>