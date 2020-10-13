<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- asset crea percorso assoluto, in questo caso da public  --}}
    {{-- http://localhost:8000/css/app.css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('titolo')</title>
</head>
<body>
    <header>
        @include('partials/header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('partials/footer')
    </footer>
</body>
</html>
