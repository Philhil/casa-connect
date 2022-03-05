<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0, shrink-to-fit=no" />

        <!-- Metas -->
       <meta  name="description" content="Come and Stay for A while. The platform to match providers and affected humans. Mediation of accommodation to fleeing ukrainian people" />
       <meta  itemprop="name" content="casa-connect" />
       <meta  itemprop="description" content="Come and Stay for A while. The platform to match providers and affected humans. Mediation of accommodation to fleeing ukrainian people" />
       <meta  property="og:title" content="Come and Stay for A while." />
       <meta  property="og:type" content="article" />
       <meta  property="og:url" content="https://casa-connect.org" />
       <meta  property="og:description" content="Come and Stay for A while. The platform to match providers and affected humans. Mediation of accommodation to fleeing ukrainian people" />
       <meta  property="og:site_name" content="casa-connect" />

        <link rel="icon" href="{{asset('favicon.ico')}}" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('scss/app.css') }}">

        <!-- Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.5/css/flag-icons.min.css" integrity="sha512-UwbBNAFoECXUPeDhlKR3zzWU3j8ddKIQQsDOsKhXQGdiB5i3IHEXr9kXx82+gaHigbNKbTDp3VY/G6gZqva6ZQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Nucleo Icons -->
        <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

        <!-- CSS Files -->
        <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1') }}" rel="stylesheet" />
        <!-- Alpine -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        @yield('head')

        @livewireStyles
    </head>

    <body class="g-sidenav-show bg-gray-100">

    @yield('content')
    {{ $slot }}

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/soft-ui-dashboard.min.js?v=1.0.2') }}"></script>
    @livewireScripts
    <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>





