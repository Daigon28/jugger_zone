<x-base> 

    <x-slot name="title"> JuggerZone </x-slot>
    {{-- <h1 class="text-white">Bienvenido a JuggerZone!!</h1> --}}
    

    <div class="relative h-175 bg-cover bg-center bg-no-repeat py-20 px-20" style="background-image: url('https://www.figma.com/file/DI0Qmjw6CbrgdsnJK5fofE/image/8588bd8bdb74870027f12501979d17d74fcebbd3');">
        <p class="mt-4 jz-title-home text-white orbitron">Entra al</p>
        <p class="jz-title-home text-[#3CD7B8] orbitron">campo</p>
        <p class="text-white mt-4 poppins"> Jugger es un deporte de equipo, estrategia y adrenalina.</p>
        <p class="text-white mt-4 poppins"> Encuentra el lugar en el campo. </p>
        <a href="#" class="rounded-full text-gray-900 bg-[#3CD7B8] p-3 m-4 ml-0 inline-flex"> Quiero conocer el jugger <i data-lucide="arrow-right" class="pl-4"></i> </a>
        <a href="#" class="rounded-full text-gray-900 bg-[#0000009f] p-3 m-4 ml-0 text-white border border-white inline-flex"> Ya juego Jugger <i data-lucide="arrow-right" class="pl-4"></i> </a>
        <a href="#" class="orbitron jz-subtitle-home absolute bottom-20 right-20">
            <span class="   text-white">Jugger</span>
            <span class="   text-[#3CD7B8]">Zone </span>
            <span class="   text-white">-></span>
        </a>
    </div>

    <div class="grid grid-cols-7 gap-12 bg-black p-12">
        {{-- <div class="col-span-4 grid grid-cols-2 gap-20 p-4"> --}}
            
            <div class="jz-card col-span-3">
                <p class="jz-subtitle-home text-[#3CD7B8] orbitron"> ¿Qué es Jugger? </p>
                <p class="text-white mt-4 poppins"> El Jugger es un deporte de equipo que combina estrategia, resistencia, combate y juego limpio. </p>
                <a href="#" class="rounded-full text-gray-900 bg-[#3CD7B8] p-3 m-4 ml-0 absolute bottom-0 right-0 inline-flex">  Conoce mas <i data-lucide="arrow-right" class="pl-4"></i> </a>
            </div>
            
            <div class="jz-card col-span-2" style="background-image: url('https://www.figma.com/file/DI0Qmjw6CbrgdsnJK5fofE/image/6006c65b8b83805fcf224814b139c470d5765d19');">
                <p class="jz-subtitle-home text-[#3CD7B8] orbitron"> Encuentra tu zona </p>
                <p class="text-white mt-4 poppins"> Entrena con nosotros cerca de ti. </p>
                <button class="rounded-full text-gray-900 bg-[#3CD7B8] p-3 m-4 ml-0 absolute bottom-0 right-0"> <a href="#"> Ver zonas -> </a> </button>
            </div>

        {{-- </div> --}}

        {{-- <div class="p-4"> --}}
            <div class="jz-card-list bg-[#3CD7B870] col-span-2">
                <div class="inline-flex mb-4"> 
                    <i data-lucide="calendar" stroke-width="2.5"></i> <div class="text-white ml-4 poppins font-bold"> Entrena con nosotros. </div> <a href="" class="text-[#3CD7B8] pl-4 pt-1 text-xs"> ver todos </a>
                </div>
                
                @foreach ($events as $event)
                    <div class="grid grid-cols-5 gap-2 ">
                        <div class="col-span-1 rounded-xl border border-white p-2 bg-[#3CD7B870] flex flex-col items-center justify-center text-center h-13 w-13">
                            @foreach ( Str::of($event->date)->explode(' ') as $part)
                                <p class="font-bold text-sm"> {{ $part }} </p>
                            @endforeach
                        </div>

                        <div class="flex flex-col col-span-4">
                            <a href="{{ route('event.show', $event) }}"> 
                                {{ $event->title }}
                            </a>
                            <div class="text-[#3CD7B87D]/56 font-500">
                                {{ $event->location }}, {{ $event->start_time }}
                            </div>
                        </div>
                    </div>
                    <hr class="m-4 text-[#3CD7B87D]">
                @endforeach
                
            </div>
        {{-- </div> --}}

    </div>

    <div>

    </div>

</x-base>