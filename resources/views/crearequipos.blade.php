@extends('layout')

@section('content')
<div class="flex-col bg-yellow-500 max-w-sm mx-auto space-y-5 p-5">
    <p class="font-normal text-center text-xl">Escriba los nombre de equipos</p>
    <div class="rounded-xl max-w-sm mx-auto bg-[#D61C4E] p-7">
        <p class="text-center">Inserte nombre del equipo 1</p>
    </div>
    <div class="rounded-xl max-w-sm mx-auto bg-[#1CD6CE] p-7">
        <p class="text-center">Inserte nombre del equipo 2</p>
    </div>
    <div class="rounded-xl max-w-sm mx-auto bg-[#FEDB39] p-7">
        <p class="text-center">Inserte nombre del equipo 3</p>
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