<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RULE</title>
    @vite('resources/css/app.css')
</head>

<body class="">
    @yield('content')
    <!--PIE DE PAGINA-->
    <footer class="bg-orange-400 py-6 mt-8 text-right text-xl">
        <div class="font-semibold pr-4">Benemerita Universidad Autonoma de Puebla</div>
        <div class="font-light pr-4">Facultad de Ciencias de la Computación</div>
    </footer>
</body>
</html>