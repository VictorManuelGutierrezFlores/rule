@extends('layout')
    @section('content')
        <div class="space-y-5 pb-8 bg-fixed flex-col" style="background-image:url(/img/bg-numeros.jpg);background-size: 40%; background-position:left top;background-repeat: no-repeat;">
            <!---Logo-->
            <div class="max-w-sm mx-auto">
                <img src="img/logo_rule.png" alt="Logo rule" class="py-10">
            </div>
            <!--BUTON DE INCIO-->
            <div class="p-4 max-w-sm mx-auto bg-[#D61C4E] rounded-3xl flex items-center space-x-4 text-white text-right">
                <div class="shrink-0">
                    <img class="h-20 w-20" src="img/mas.png" alt="Signo mas">
                </div>
                <div class="text-right">
                    <div class="text-2xl font-medium">
                        <a href="/crearequipos">
                        Agregar Equipos
                        </a>
                    </div>
                    <p class="font-normal">Maximo 3 equipos</p>
                </div>
            </div>
        </div>
    @endsection
