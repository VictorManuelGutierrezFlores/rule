@extends('layout')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.14/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<script>
    let tiempo = 10
    let contador = 0
    let contando = false

    var suspender_sonido = new Audio('sounds/s-start-boxing.ogg');
    var clic1 = new Audio('sounds/s-click-002.ogg')
    var clic2 = new Audio('sounds/s-click-004.ogg')
    suspender()

    function temporizar() {
        let t = tiempo - contador
        contando = t > 0
        if (contador % 2 == 0) {
            select_id("frente").innerHTML = t
            clic1.play()
        } else {
            select_id("atras").innerHTML = t
            clic2.play()
        }

        style("moneda").transform = `rotateY(${180 * contador}deg)`
        if (contando) {
            contador++
            setTimeout(() => {
                temporizar()
            }, 1000);
        } else {
            suspender()
            suspender_sonido.play()
        }
    }

    function suspender() {
        contador = 0
        select_id("frente").innerHTML = `
        <i class="fas fa-stopwatch"></i>
        <span style="font-size:30%; font-just; opacity:0.5">Empezar</span>
        `;
        select_id("atras").innerHTML = `
        <i class="fas fa-stopwatch"></i>
        <span style="font-size:30%; font-just; opacity:0.5">¡Se acabó!</span>
        `;
    }

    async function tomarTiempo() {
        const {
            value: tiempo_input
        } = await swal.fire({
            title: "¡Tienen 15 minutos para jugar!",
            showCancelButton: true
        })
        if (!tiempo_input) {
            return
        }
        tiempo = 5
        contador = 0
        if (!contando) {
            temporizar()
        }
    }

    function style(id) {
        return select_id(id).style
    }

    function select_id(id) {
        return document.getElementById(id)
    }
</script>
<!--Final del script-->
<div class="space-y-1 pb-8 bg-fixed flex-col" style="background-image:url(/img/logo_rule-png.png);background-size: 15%; background-position:left top;background-repeat: no-repeat;">
    <p class="text-center font-just text-6xl pb-5 pt-20">¡El juego ha comenzado!</p>
    <div class=" h-96 columns-3 flex-col grid-rows-6 grid-flow-col gap-0 mx-auto mt-0 space-y-5 p-5 rounded-t-lg rounded-b-lg max-w-4xl">
        <!--columna 1-->
        <div class="rounded-xl max-w-sm mx-auto text-black bg-[#1CD6CE] equipos">
            <p class="font-just text-4xl text-center" id="team1">{{$teams['team1']}}</p>
        </div>
        <div class="rounded-xl max-w-sm mx-auto text-black bg-[#FEDB39] equipos">
            <p class="font-just text-4xl text-center" id="team2">{{$teams['team2']}}</p>
        </div>
        <!--columna 2-->
        <div class="text-black rounded-full puntaje_circulo mx-auto bg-[#1CD6CE] p-5">
            <p class="font-just text-4xl text-center" name="puntajeE1" id="E1">1</p>
        </div>
        <div class="text-black rounded-full puntaje_circulo mx-auto bg-[#FEDB39] p-5">
            <p class="font-just text-4xl text-center" name="puntajeE2" id="E2">0</p>
        </div>
        <!--columna 3-->
        <div class="columns-xs font-just">
            <br>
            <div>
                <p class=" text-4xl text-center">Haz click para iniciar el temporizador</p>
            </div>
            <div>
                <div class="contenedor">
                    <div class="moneda" id="moneda" onclick="tomarTiempo()">
                        <div class="lado frente" id="frente"></div>
                        <div class="lado atras" id="atras"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--botones-->
    <div class="flex-col max-w-sm mx-auto mt-6 space-y-5 p-5 rounded-t-lg rounded-b-lg">
        <!--BOTON PARA REGRESAR A PAGINA CREAR EQUIPOS-->
        <button type="button" class="text-4xl text-white bg-[#D61C4E] hover:bg-[#D61C4E]/90 focus:ring-4 focus:outline-none focus:ring-[#D61C4E]/50 font-just rounded-lg px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#D61C4E]/55 mr-2 mb-2">
            <a href="/crearequipos">
                <span class="px-5">
                    Regresar
                </span>
            </a>
        </button>
        <!--Boton para finalizar juego-->
        <button type="button" class="text-4xl text-white bg-[#D61C4E] hover:bg-[#D61C4E]/90 focus:ring-4 focus:outline-none focus:ring-[#D61C4E]/50 font-just rounded-lg px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#D61C4E]/55 mr-2 mb-2">
            
            <a href="/marcadorfinal/{{$teams['team1']}}/{{$teams['team2']}}">
                <span>
                    Finalizar juego
                </span>
            </a>
        </button>
    </div>
</div>
    
@php
    $e1 = ''; // your HTML data from the question
    preg_match( '/<p id="\E1\">(.*?)<\/p>/', $e1, $match );
    
    $e2 = ''; // your HTML data from the question
    preg_match( '/<p id="\E2\">(.*?)<\/p>/', $e2, $match );
@endphp

@endsection