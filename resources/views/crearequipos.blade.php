@extends('layout')

@section('content')

<script type="text/javascript" >
    function agregar_equipo(){
        document.getElementById("equipo3").style.display = "block";
    }

    function quitar_equipo(){
        document.getElementById("equipo3").style.display = "none";
    }

    function mostrar_ocultar(){
        var equipo = document.getElementById("equipo3");
        if (equipo.style.display == "none")
        {
            agregar_equipo();
            boton.innerHTML = 'Quitar equipo';
        }
        else{
            quitar_equipo();
            boton.innerHTML = 'Agregar equipo';
        }
    }


</script>
<div class="space-y-1 pb-8 bg-fixed flex-col " style="background-image:url(/img/logo_rule-png.png);background-size: 15%; background-position:left top;background-repeat: no-repeat;">
<div class="flex-col max-w-sm mx-auto mt-0 space-y-5 p-5 rounded-t-lg rounded-b-lg ">

<p class="font-just text-center pb-0 pt-20 text-6xl">Nombra a tus equipos</p>
    <div class="rounded-xl max-w-sm mx-auto text-black bg-[#1CD6CE] p-7 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 hover:bg-[#1CD6CE] duration-300">
        <input class="text-center block w-full rounded-md font-just text-4xl placeholder-black" placeholder="Inserte nombre del equipo 1" style="background-color:transparent;"></input>
    </div>
    <div class="rounded-xl max-w-sm mx-auto bg-[#FEDB39] p-7 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 hover:bg-[#FEDB39] duration-300">
        <input class="text-center block w-full rounded-md font-just text-4xl text-black placeholder-black" placeholder="Inserte nombre del equipo 2 " style="background-color:transparent;"></input>
    </div>
    <div class="rounded-xl max-w-sm mx-auto text-white bg-[#293462] p-7 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 hover:bg-[#293462] duration-300" style="display:none" id="equipo3" >
        <input class="text-center block w-full rounded-md font-just text-4xl placeholder-white" placeholder="Inserte nombre del equipo 3" style="background-color:transparent;"></input>
    </div>

    <!-- boton para agregar/quitar equipo 3-->
    <div class="max-w-sm mx-auto">
        <button type="button" id="boton" class="ml-24 px-4 py-1 rounded-full transition ease-in-out delay-150 bg-[#2A3990] text-white font-just text-2xl hover:-translate-1 hover:scale-105 hover:bg-[#293462] duration-150" onclick="mostrar_ocultar()">Agregar equipo</button>
    </div>

</div>

<div class="flex-col max-w-sm mx-auto mt-3 space-y-5 p-5 rounded-t-lg rounded-b-lg ">
    <!--Boton para iniciar juego-->
    <button type="button" class="text-white bg-[#D61C4E] hover:bg-[#D61C4E]/90 focus:ring-4 focus:outline-none focus:ring-[#D61C4E]/50 font-just text-4xl rounded-lg px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#D61C4E]/55 mr-2 mb-2">
        <a href="/comienzajuego"> 
            Empezar partida
        </a>
    </button>
</div>

@endsection
