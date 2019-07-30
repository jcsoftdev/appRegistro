<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Juan Carlos">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('titulo')</title>
    <link rel="shortcut icon" href="assets/images/logoFis.png">
    <link rel="stylesheet" href="./assets/css/plantilla.css">
    <link rel="stylesheet" href="assets/css/plantilla.css">
    <link rel="stylesheet" href="./css/app.css">
    <script src="./js/plantillahead.js"></script>
  </head>
 
  <body>

    <div id="app">
        <div class="header-bg">
            <!-- Navigation Bar-->
            <header id="topnav">
                @include('componentes.topnav')
                <!-- end topbar-main -->
                @include('componentes.header')
            </header>
            <!-- End Navigation Bar-->
            <div class="wrapper">

                <div class="container-fluid">

                    @yield('contenido')
                </div>
            </div>
        </div>
        


        @include('componentes.footer')
    </div>
    
    <!-- App js -->
    <script src="./js/app.js"></script>
    <!-- plantilla  -->
        {{-- <script>$().DataTable();</script> --}}
    <script src="./js/plantilla.js"></script>
</body>
</html>