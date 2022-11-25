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
    <footer class="bg-[#293462] text-white py-6 mt-8 text-right text-xl w-full absolute bottom-0">
        <div class="font-just text-4xl pr-4">Benémerita Universidad Autónoma de Puebla</div>
        <div class="font-just text-3xl pr-4">Facultad de Ciencias de la Computación</div>
    </footer>
</body>
</html>
