<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/estilos_basicos.css') }}">
    </head>
    <body>
        @include('site.layouts._partials.topo')
        @yield('conteudo')
        @include('site.layouts._partials.footer')
    </body>
</html>