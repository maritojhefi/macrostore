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
    @stack('header')
</head>

<body class="layout-1" data-luno="theme-green">
    <div class="wrapper">

        <div class="page-body auth px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
            <div class="container-fluid">
                <div class="row g-3">
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center">
                        <div style="max-width: 25rem;">
                            <div class="mb-4">
                                <img src="{{ asset('img/macrobyte-logo2.png') }}" alt="">
                            </div>
                            <div class="mb-5">
                                <h2 class="color-900">Macrobyte</h2>
                            </div>

                            <ul class="list-unstyled mb-5">
                                <li class="mb-4">
                                    <span class="d-block mb-1 fs-4 fw-light">Empresa de desarrollo software</span>
                                    <span class="color-600">Seguridad e innovacion!</span>
                                </li>
                                <li>
                                    <span class="d-block mb-1 fs-4 fw-light">Quieres trabajar con nosotros?</span>
                                    <span class="color-600">Estamos cerca de ti, contactanos...</span>
                                </li>
                            </ul>

                            <div>
                                <a href="https://www.facebook.com/macrobyte.tja" class="me-3 color-400"
                                    target="_blank"><i class="fa fa-facebook-square fa-lg"></i></a>
                                <a href="https://github.com/maritojhefi" class="me-3 color-400" target="_blank"><i
                                        class="fa fa-github-square fa-lg"></i></a>
                                <a href="https://wa.link/z6wqtj" class="me-3 color-400" target="_blank"><i
                                        class="fa fa-whatsapp fa-lg"></i></a>
                                <a href="https://www.linkedin.com/in/mario-cotave-43b47a133/" class="me-3 color-400"
                                    target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <div class="card shadow-sm w-100 p-4 p-md-5" style="max-width: 32rem;">
                            <form class="row g-3">
                                @yield('content')
                                <div class="col-12 text-center">
                                    <a href="/" title=""
                                        class="btn btn-lg btn-block btn-dark lift text-uppercase">Ir a Inicio</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
