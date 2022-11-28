@extends('layout')
    @section('content')
        
        <div class="space-y-1 pb-8 bg-fixed flex-col " style="background-image:url(/img/bg-numeros.jpg);background-size: 40%;
                    background-position:left top;background-repeat: no-repeat;">

            <p class="text-center text-xl font-just text-6xl pb-5 pt-4">¡El juego ha comenzado!</p>

            <div class="grid grid-cols-2 gap-10 flex-col max-w-sm mx-auto mt-0 space-y-5 p-5 rounded-t-lg rounded-b-lg bg-pink-200">
                <div>
                    <div class="rounded-xl max-w-sm mx-auto text-white bg-[#1CD6CE] p-7 transition ease-in-out delay-150 hover:-translate-y-1 
                                hover:scale-105 hover:bg-[#1CD6CE] duration-300">
                        <p class="text-center block w-full rounded-md font-just text-4xl placeholder-white" style="background-color:transparent;">Equipo 1</p>
                    </div>

                    <div class="rounded-xl max-w-sm mx-auto bg-[#FEDB39] p-7 transition ease-in-out delay-150 hover:-translate-y-1 
                                hover:scale-105 hover:bg-[#FEDB39] duration-300">
                        <p class="text-center block w-full rounded-md font-just text-4xl text-black placeholder-black" style="background-color:transparent;">Equipo 2</p>
                    </div>

                    <div class="rounded-xl max-w-sm mx-auto bg-[#293462] p-7 transition ease-in-out delay-150 hover:-translate-y-1 
                                hover:scale-105 hover:bg-[#293462] duration-300">
                        <p class="text-center block w-full rounded-md font-just text-4xl text-black placeholder-black" style="background-color:transparent;">Equipo 3</p>
                    </div>
                </div>

                <div>
                <div class="rounded-full max-w-sm mx-7 text-white bg-[#1CD6CE] p-7 transition ease-in-out delay-150 hover:-translate-y-1 
                                hover:scale-105 hover:bg-[#1CD6CE] duration-300">
                        <p class="text-center block w-full rounded-md font-just text-4xl placeholder-white" style="background-color:transparent;">Puntaje</p>
                    </div>

                    <div class="rounded-full max-w-sm mx-7 bg-[#FEDB39] p-7 transition ease-in-out delay-150 hover:-translate-y-1 
                                hover:scale-105 hover:bg-[#FEDB39] duration-300">
                        <p class="text-center block w-full rounded-md font-just text-4xl text-black placeholder-black" style="background-color:transparent;">Puntaje</p>
                    </div>

                    <div class="rounded-full max-w-sm mx-7 bg-[#293462] p-7 transition ease-in-out delay-150 hover:-translate-y-1 
                                hover:scale-105 hover:bg-[#293462] duration-300">
                        <p class="text-center block w-full rounded-md font-just text-4xl text-black placeholder-black" style="background-color:transparent;">15</p>
                    </div>
                </div>
                
            </div>

            <div class="flex-col max-w-sm mx-auto mt-6 space-y-5 p-5 rounded-t-lg rounded-b-lg ">
                <!--Boton para finalizar juego-->
                <button type="button" class="text-white bg-[#D61C4E] hover:bg-[#D61C4E]/90 focus:ring-4 focus:outline-none 
                focus:ring-[#D61C4E]/50 font-just text-4xl rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center 
                dark:focus:ring-[#D61C4E]/55 mr-2 mb-2">
                    <a href="/resultados"> 
                        Finalizar juego
                    </a>
                </button>
            </div>
        </div>

    @endsection
