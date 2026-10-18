<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UNPAM - Prodi Sistem Informasi')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=5">
</head>
<body>
    @include('partials.header')

    <main class="main-content">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>