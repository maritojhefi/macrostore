<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Macrobyte, empresa de desarrollo software, innovando en el mundo del desarrollo web">
    <meta name="keyword"
        content="Macrobyte,Desarrollo Web,Ecommerce, POS,Laravel,Tarija,Macrobyte Tarija,Delight,Restaurante,Acortador Link,Punto de Venta,Pagina,App,Sitio,Tarija,Macrobyte">
    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/luno-style.css') }}">
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    @stack('header')
</head>

<body class="layout-1" data-luno="theme-green">
    @include('admin.includes.sidebar')
    <div class="wrapper">
        @include('admin.includes.header')
        @include('admin.includes.toolbar')
        @yield('content')
        @include('admin.includes.footer')

    </div>
    @stack('modals')
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    @stack('footer')
</body>

</html>
