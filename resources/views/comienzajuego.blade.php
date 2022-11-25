@extends('layout')

@section('content')

<div class="space-y-1 pb-8 bg-fixed flex-col" style="background-image:url(/img/logo_rule-png.png);background-size: 15%; background-position:left top;background-repeat: no-repeat;">
        <p class="text-center text-xl font-just text-6xl pb-5 pt-20">¡El juego ha comenzado!</p>
        <div class=" h-96 columns-3 flex-col grid-rows-3 grid-flow-col gap-0 mx-auto mt-0 space-y-5 p-5 rounded-t-lg rounded-b-lg max-w-4xl">
            <!--columna 1-->
            <div class="rounded-xl max-w-sm mx-auto text-black bg-[#1CD6CE] equipos">
                <p class="font-just text-4xl text-center">Nombre equipo 1</p>
            </div>
            <div class="rounded-xl max-w-sm mx-auto text-black bg-[#FEDB39] equipos">
                <p class="font-just text-4xl text-center">Nombre equipo 2</p>
            </div>
            <div class="rounded-xl max-w-sm mx-auto text-white bg-[#293462] equipos">
                <p class="font-just text-4xl text-center">Nombre equipo 3</p>
            </div>
            <!--columna 2-->
            <div class="rounded-full text-black rounded-full puntaje_circulo mx-auto bg-[#1CD6CE] p-5">
                <p class="font-just text-4xl text-center">5</p>
            </div>
            <div class="rounded-full text-black rounded-full puntaje_circulo mx-auto bg-[#FEDB39] p-5">
                <p class="font-just text-4xl text-center">10</p>
            </div>
            <div class="rounded-full text-white rounded-full puntaje_circulo mx-auto bg-[#293462] p-5">
                <p class="font-just text-4xl text-center">15</p>
            </div>
            <!--columna 3-->
            <div class="rounded-xl text-black row-span-3 h-full" style="background-image:url(/img/cronometro.png); background-size: 70%; background-position:center; background-repeat: no-repeat;">
            </div>
        </div>

        <div class="flex-col max-w-sm mx-auto mt-6 space-y-5 p-5 rounded-t-lg rounded-b-lg">
            <!--Boton para finalizar juego-->
            <a href="/r123">
                <button type="button" class="text-4xl text-white bg-[#D61C4E] focus:outline-none font-just rounded-lg px-5 py-2.5 text-center inline-flex items-center  mr-2 mb-2 transition ease-in-out delay-150 hover:-translate hover:scale-105">
                    Finalizar juego
                </button>
            </a>
            </div>
</div>
@endsection