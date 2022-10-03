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

        @hasSection('container')
            @include('admin.includes.header')
            @include('admin.includes.toolbar')
            <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
                @yield('container')
            </div>
            @include('admin.includes.footer')
        @endif


        @hasSection('container-leftbar')
            @include('admin.includes.header')
            <div class="page-body body-layout-1">
                <div class="leftbar d-flex flex-nowrap">
                    @include('admin.includes.leftbar')
                    <div class=" order-2 flex-grow-1 px-lg-3 px-0 custom_scroll">
                        @include('admin.includes.toolbar')
                        <div class="page-toolbar py-2">
                            @yield('container-leftbar')
                        </div>
                        @include('admin.includes.footer')

                    </div>
                </div>
            </div>
            @push('footer')
                <script>
                    $('.social-list-toggle').on('click', function() {
                        $('.leftbar').toggleClass('open');
                    });
                </script>
            @endpush
        @endif


    </div>

    @stack('modals')
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script>
        document.addEventListener('click', function handleClickOutsideBox(event) {
            const box = document.getElementById('left-bar');
            if (!box.contains(event.target)) {
                box.classList.remove("open");
            }
        });
    </script>
    @stack('footer')
</body>

</html>
