@extends('layout')
@section('content')

<div style="background-image:url(/img/confetti.gif);background-size: cover; background-position:center;background-repeat: no-repeat;">
<div class="space-y-1 pb-8 bg-fixed flex-col min-h-screen" style="background-image:url(/img/logo_rule-png.png);background-size: 15%; background-position:left top;background-repeat: no-repeat;">
        <p class="text-center text-xl font-just text-7xl pb-5 pt-20">¡Felicidades!</p>
        <div class=" h-96 columns-3 flex-col grid-rows-3 grid-flow-col gap-0 mx-auto mt-0 space-y-5 p-5 rounded-t-lg rounded-b-lg max-w-4xl">
            <!--columna 1-->
            <div class="rounded-xl max-w-sm mx-auto text-black bg-[#FEDB39] equipos">
                <p class="font-just text-4xl text-center">Nombre equipo 2</p>
            </div>
            <div class="rounded-xl max-w-sm mx-auto text-white bg-[#293462] equipos">
                <p class="font-just text-4xl text-center">Nombre equipo 3</p>
            </div>
            <div class="rounded-xl max-w-sm mx-auto text-black bg-[#1CD6CE] equipos">
                <p class="font-just text-4xl text-center">Nombre equipo 1</p>
            </div>
            <!--columna 2-->
            <div class="rounded-full text-black rounded-full puntaje_circulo mx-auto bg-[#FEDB39] p-5">
                <p class="font-just text-4xl text-center">10</p>
            </div>
            <div class="rounded-full text-black rounded-full puntaje_circulo mx-auto bg-[#1CD6CE] p-5">
                <p class="font-just text-4xl text-center">5</p>
            </div>
            <div class="rounded-full text-white rounded-full puntaje_circulo mx-auto bg-[#293462] p-5">
                <p class="font-just text-4xl text-center">15</p>
            </div>
            <!--columna 3-->
            <div class="rounded-xl">
                <img src="img/1.png" alt="Logo rule" class="h-20">
            </div>
            <div class="rounded-xl">
                <img src="img/2.png" alt="Logo rule" class="h-20">
            </div>
            <div class="rounded-xl">
                <img src="img/3.png" alt="Logo rule" class="h-20">
            </div>
        </div>

        <div class="flex-col max-w-sm mx-auto mt-6 space-y-5 p-5 rounded-t-lg rounded-b-lg">
            <!--Boton para finalizar juego-->
                <button type="button" class="text-4xl text-white bg-[#D61C4E] hover:bg-[#D61C4E]/90 focus:ring-4 focus:outline-none focus:ring-[#D61C4E]/50 font-just rounded-lg px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#D61C4E]/55 mr-2 mb-2">
                    <a href="/index">
                        Jugar de Nuevo
                    </a>
                </button>
            </div>
</div>
</div>
@endsection
