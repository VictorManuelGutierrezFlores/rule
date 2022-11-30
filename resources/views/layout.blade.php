<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RULE</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-stone-100">
    @yield('content')
    <!--PIE DE PAGINA-->
    <footer class=" bg-stone-100 text-black py-5 mt-7 text-right w-full absolute bottom-0">
        <div class="font-just text-4xl pr-3">Benémerita Universidad Autónoma de Puebla</div>
        <div class="font-just text-3xl pr-3">Facultad de Ciencias de la Computación</div>
    </footer>
</body>
</html>
