<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>@yield('titulo')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
@include('site.layouts._partials.topo')

<body>
    @yield('conteudo')
    @yield('rodape')
</body>

</html>
