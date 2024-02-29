<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Super Gestão - @yield('title')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    @include('components.head')
    @yield('content')
</body>

@include('components.footer')
</html>
