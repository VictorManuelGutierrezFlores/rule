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

<div class="flex-col bg-yellow-500 max-w-sm mx-auto mt-6 space-y-5 p-5 rounded-t-lg rounded-b-lg">
    <p class="font-normal text-center text-xl font-bold pb-5">Escriba los nombre de equipos</p>
    <div class="rounded-xl max-w-sm mx-auto text-white bg-[#D61C4E] p-7 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 hover:bg-[#D61C4E] duration-300">
    <input class="text-center block w-full rounded-md font-bold placeholder-black" placeholder="Inserte nombre del equipo 1" style="background-color:transparent;"></input>
    </div>
    <div class="rounded-xl max-w-sm mx-auto bg-[#6CD6CE] p-7 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 hover:bg-[#6CD6CE] duration-300">
    <input class="text-center block w-full rounded-md font-bold text-gray-100 placeholder-black" placeholder="Inserte nombre del equipo 2 " style="background-color:transparent;"></input>
    </div>
    <div class="rounded-xl max-w-sm mx-auto bg-[#FEDB39] p-7 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 hover:bg-[#FEDB39] duration-300 hidden" id="equipo3" >
        <input class="text-center block w-full rounded-md font-bold placeholder-black" placeholder="Inserte nombre del equipo 3" style="background-color:transparent;"></input>
    </div>

    <!-- boton para agregar/quitar equipo 3-->
    <div class="max-w-sm mx-auto">
        <button type="button" id="boton" class="ml-24 px-4 py-1 rounded-full transition ease-in-out delay-150 bg-[#293462] text-white font-semibold  hover:-translate-1 hover:scale-105 hover:bg-[#293462] duration-150" onclick="mostrar_ocultar()">Agregar equipo</button>
    </div>

    <!--Boton para iniciar juego-->
    <button type="button" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2">
        <svg class="mr-2 -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
            <path fill="currentColor" d="M279.1 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.4 0 225.4 0c-73.22 0-121.1 44.38-121.1 124.7v70.62H22.89V288h81.39v224h100.2V288z"></path>
        </svg>
        Sign in with Facebook
    </button>
</div>
@endsection
