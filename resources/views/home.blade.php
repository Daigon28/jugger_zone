<x-base> 

    <x-slot name="title"> JuggerZone </x-slot>
    {{-- <h1 class="text-white">Bienvenido a JuggerZone!!</h1> --}}
    

    <div class="relative h-175 bg-cover bg-center bg-no-repeat py-20 px-20" style="background-image: url('https://www.figma.com/file/DI0Qmjw6CbrgdsnJK5fofE/image/8588bd8bdb74870027f12501979d17d74fcebbd3');">
        <p class="mt-4 jz-title-home text-white orbitron">Entra al</p>
        <p class="jz-title-home text-[#3CD7B8] orbitron">campo</p>
        <p class="text-white mt-4 poppins"> Jugger es un deporte de equipo, estrategia y adrenalina.</p>
        <p class="text-white mt-4 poppins"> Encuentra el lugar en el campo. </p>
        <a href="#" class="rounded-full text-gray-900 bg-[#3CD7B8] p-3 m-4 ml-0 inline-flex"> Quiero conocer el jugger <i data-lucide="arrow-right" class="pl-2 shrink-0 w-7 h-7"></i> </a>
        <a href="#" class="rounded-full text-gray-900 bg-[#0000009f] p-3 m-4 ml-0 text-white border border-white inline-flex"> Ya juego Jugger <i data-lucide="arrow-right" class="pl-2 shrink-0 w-7 h-7"></i> </a>
        <a href="#" class="orbitron jz-subtitle-home absolute bottom-20 right-20">
            <span class="text-white">Jugger</span>
            <span class="text-[#3CD7B8]">Zone </span>
            <span class="text-white">-></span>
        </a>
    </div>

    <div class="grid grid-cols-7 gap-12 bg-black p-12">
            
            <div class="jz-card col-span-3">
                <p class="jz-subtitle-home text-[#3CD7B8] orbitron"> ¿Qué es Jugger? </p>
                <p class="text-white mt-4 poppins"> El Jugger es un deporte de equipo que combina estrategia, resistencia, combate y juego limpio. </p>
                <a href="#" class="rounded-full text-gray-900 bg-[#3CD7B8] p-3 m-4 ml-0 absolute bottom-0 right-0 inline-flex">  Conoce mas <i data-lucide="arrow-right" class="pl-2 shrink-0 w-7 h-7"></i> </a>
            </div>
            
            <div class="jz-card col-span-2 bg-cover bg-center bg-no-repeat" style="background-image: url('https://www.figma.com/file/DI0Qmjw6CbrgdsnJK5fofE/image/6006c65b8b83805fcf224814b139c470d5765d19');">
                <p class="jz-subtitle-home text-[#3CD7B8] orbitron"> Encuentra tu zona </p>
                <p class="text-white mt-4 poppins"> Entrena con nosotros cerca de ti. </p>
                <a href="#" class="rounded-full text-gray-900 bg-[#3CD7B8] p-3 m-4 ml-0 absolute bottom-0 right-0 inline-flex">  Ver zonas <i data-lucide="arrow-right" class="pl-2 shrink-0 w-7 h-7"></i> </a>
                
            </div>

            <div class="jz-card-list bg-[#3CD7B870] col-span-2">
                <div class="inline-flex mb-4"> 
                    <i data-lucide="calendar" stroke-width="2.5"></i> <div class="text-white ml-4 poppins font-bold"> Entrena con nosotros. </div> <a href="" class="text-[#3CD7B8] pl-2 pt-1 text-xs"> ver todos </a>
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

            <div class="col-span-5">
                <div class="grid grid-cols-10 gap-4 mb-6">
                    <div class="col-span-7"> 
                        <hr class="m-4 text-[#FFFFFF]">
                    </div>
                    <div class="text-white col-span-3 text-xl"> PLAY LIKE A CHAMPION </div>
                </div>
                {{-- -------------------------------- --}}
                {{-- -------------------------------- --}}
                {{-- -------------------------------- --}}
                <div class="relative jz-card !flex !flex-row items-center">
                    {{-- IMAGEN DE FONDO CON OPACIDAD --}}
                    <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat opacity-40" 
                        style="background-image: url('https://www.figma.com/file/DI0Qmjw6CbrgdsnJK5fofE/image/c5d0edb22efaed282dd42f1fc53e5c45ab34b511');">
                    </div>
                    {{-- TEXTO DE FRENTE --}}
                    <div class="relative w-full z-10 grid grid-cols-2 gap-6">
                        {{-- COLUMNA IZQUIERDA: Textos y botón principal --}}
                        <div class="">
                            <div class="">
                                <p class="jz-title-home text-[#3CD7B8] orbitron"> ¿Eres nuevo? </p>
                                <p class="text-white mt-4 poppins text-xl"> Perfecto, aqui inicia tu camino. </p>
                            </div>
                            {{-- Botón principal estilizado --}}
                            <a href="#" class="rounded-full text-gray-900 bg-[#3CD7B8] inline-flex mt-6 p-2">  Empieza aqui <i data-lucide="arrow-right" class="pl-2 shrink-0 w-7 h-7"></i> </a>
                        </div>
                        {{-- COLUMNA DERECHA: COSAS EXTRAS --}}
                        <div class="grid grid-cols-3 gap-6">
                            <div class="flex flex-col justify-center items-center">
                                <p class="rounded-full w-15 h-15 orbitron text-3xl flex flex-col justify-center items-center text-black bg-[#3CD7B8]"> 1 </p>
                                <p class="poppins text-center text-[#3CD7B8]"> Encuentra un entrenamiento </p>
                            </div>
                            
                            <div class="flex flex-col justify-center items-center">
                                <p class="rounded-full w-15 h-15 orbitron text-3xl flex flex-col justify-center items-center text-black bg-[#3CD7B8]"> 2 </p>
                                <p class="poppins text-center text-[#3CD7B8]"> Qué necesitas llevar </p>
                            </div>
                            
                            <div class="flex flex-col justify-center items-center">
                                <p class="rounded-full w-15 h-15 orbitron text-3xl flex flex-col justify-center items-center text-black bg-[#3CD7B8]"> 3 </p>
                                <p class="poppins text-center text-[#3CD7B8]"> Conoce las posiciones </p>
                            </div>
                            
                            <div class="flex flex-col justify-center items-center">
                                <p class="rounded-full w-15 h-15 orbitron text-3xl flex flex-col justify-center items-center text-black bg-[#3CD7B8]"> 4 </p>
                                <p class="poppins text-center text-[#3CD7B8]"> Aprende con tutoriales </p>
                            </div>
                            
                            <div class="flex flex-col justify-center items-center">
                                <p class="rounded-full w-15 h-15 orbitron text-3xl flex flex-col justify-center items-center text-black bg-[#3CD7B8]"> 5 </p>
                                <p class="poppins text-center text-[#3CD7B8]"> Encuentra o crea tu equipo </p>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

            <div class="col-span-2"> 
                <div class="jz-card bg-[#77777770]/44">
                    <div class="inline-flex mb-4"> 
                        <i data-lucide="star" stroke-width="2.5" class="text-[#3CD7B8]"></i> <div class="text-white ml-4 poppins font-bold "> ¿Qué jugador eres? </div>
                    </div>
                    <p class="text-white mt-4 poppins"> Haz el test y descubre que rol va contigo. </p>
                    <a href="#" class="rounded-full text-gray-900 bg-[#3CD7B8] p-3 m-4 ml-0 inline-flex w-fit">  Hacer test <i data-lucide="arrow-right" class="pl-2 shrink-0 w-7 h-7"></i> </a>
                </div>

                <div class="m-3"></div>
                
                <div class="jz-card bg-[#77777770]/44">
                    <div class="inline-flex mb-4"> 
                        <i data-lucide="calendar" stroke-width="2.5"></i> <div class="text-white ml-4 poppins font-bold "> Noticias </div>
                    </div>
                    {{-- @foreach ($news as $entry)
                        
                    @endforeach --}}
                </div>
            </div>

            

            

    </div>

    <div>

    </div>

</x-base>