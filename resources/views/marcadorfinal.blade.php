@extends('layout')
@section('content')
<div style="background-image:url(/img/confetti.gif); " class="bg-cover h-screen">
    <div class="space-y-1 pb-8 bg-fixed flex-col" style="background-image:url(/img/logo_rule-png.png);background-size: 15%; background-position:left top;background-repeat: no-repeat;">
            <p class="text-center font-just text-7xl pb-5 pt-20">¡Felicidades!</p>
            <div class="h-96 columns-3 flex-col grid-rows-3 grid-flow-col gap-0 mx-auto mt-0 space-y-5 p-5 rounded-t-lg rounded-b-lg max-w-4xl">
                <!--columna 1-->
                <div class="rounded-xl max-w-sm mx-auto text-black bg-[#FEDB39] equipos">
                    <p class="font-just text-4xl text-center">{{ $finalistas['equipo1'] }}</p>
                </div>
                <div class="rounded-xl max-w-sm mx-auto text-black bg-[#1CD6CE] equipos">
                    <p class="font-just text-4xl text-center">{{$finalistas['equipo2']}}</p>
                </div>
                <!--columna 2-->
                
                <div class="text-black rounded-full puntaje_circulo mx-auto bg-[#FEDB39] p-5">
                    <p class="font-just text-4xl text-center" id="PuntosFinalesE1">0</p>
                </div>
                <div class="text-black rounded-full puntaje_circulo mx-auto bg-[#1CD6CE] p-5">
                    <p class="font-just text-4xl text-center" id="Puntos">1</p>
                </div>

                <!--columna 3-->
                <div class="rounded-xl">
                    <img src="{{ asset('img/1.png') }}" alt="Logo rule" class="h-20">
                </div>
                <div class="rounded-xl">   
                    <img src="{{ asset('img/2.png') }}" alt="Logo rule" class="h-20">
                </div>
                <div class="rounded-xl"> 
                    <img src="{{ asset('img/3.png') }}" alt="Logo rule" class="h-20"> 
                </div>
            </div>
            <!--botones finales-->
            <div class="flex flex-row botones_resultados m-auto pt-5 rounded-t-lg rounded-b-lg">
                    <!--Boton para finalizar juego-->
                    <button type="button" class="justify-center basis-1/2 text-4xl text-white bg-[#D61C4E] hover:bg-[#D61C4E]/90 focus:ring-4 focus:outline-none focus:ring-[#D61C4E]/50 font-just rounded-lg px-3 py-2.5 text-center inline-flex items-center dark:focus:ring-[#D61C4E]/55 mr-2 mb-2">
                        <a href="/crearequipos">
                            Jugar de Nuevo
                        </a>
                    </button>
                    <!--Boton para volver a pagia principal-->
                    <button type="button" class="justify-center  basis-1/2 text-4xl text-white bg-[#D61C4E] hover:bg-[#D61C4E]/90 focus:ring-4 focus:outline-none focus:ring-[#D61C4E]/50 font-just rounded-lg px-3 py-2.5 text-center inline-flex items-center dark:focus:ring-[#D61C4E]/55 mr-2 mb-2">
                        <a href="/">
                            Regresar al Inicio
                        </a>
                    </button>
            </div>
    </div>
</div>
@endsection
