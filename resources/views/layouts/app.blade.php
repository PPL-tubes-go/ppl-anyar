<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle ?? 'Do-ty List' }}</title>
    @vite('resources/sass/app.scss')
</head>
<style>
    body {
        background-image: url('https://marketplace.canva.com/EAFZcmTpKas/1/0/1600w/canva-video-intro-portada-fondo-background-simple-rosa-dorado-U93tpA4NMDA.jpg');

    }
</style>

<body>
    @include('layouts.nav')
    <div class="container mt-4">
        @yield('content')
    </div>
    @vite('resources/js/app.js')
    @include('sweetalert::alert')
    @stack('scripts')
</body>
</html>
