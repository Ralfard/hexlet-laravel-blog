<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hexlet Blog - @yield('title')</title>
    @include('shared.metategs')
</head>

<body>
    <div class="container mt-4">
        <h1>@yield('header')</h1>
        <div>
            @yield('content')
        </div>
    </div>
</body>

</html>
