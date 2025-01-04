<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle ?? 'Do-ty List' }}</title>
    @vite('resources/sass/app.scss')
</head>
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
