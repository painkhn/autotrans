<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<body>
    <main>
        @yield('content')
    </main>
</body>
<script src="{{ asset('js/script.js') }}"></script>

</html>
