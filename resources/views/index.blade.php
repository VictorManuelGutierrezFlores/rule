@extends('layout')
@section('content')
    <div class="space-y-5 pb-8 bg-fixed flex-col" style="background-image:url(/img/bg-numeros.jpg);background-size: 40%; background-position:left top;background-repeat: no-repeat;">
        <!---Logo-->
        <div class="max-w-sm mx-auto">
            <img src="{{ asset('img/logo_rule-png.png') }}" alt="Logo rule" class="py-10">
        </div>
        <!--BUTON DE INCIO-->
        <a href="/crearequipos">
        <div class="button p-1 max-w-sm w-52 mx-auto bg-[#D61C4E] rounded-3xl flex items-center space-x-4 text-white transition ease-in-out delay-150  hover:-translate-1 hover:scale-105 hover:bg-[#D61C4E] duration-150">
            <div class="font-medium w-auto m-auto font-just text-6xl">
                <span class="py-2">
                    Iniciar
                </span>
            </div>
        </div>
        </a>
    </div>
@endsection
