
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>ASISTENCIA FIS</title>
    <meta content="jcsoftia" name="description" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="https://jcsoftia.github.io/jcsoftia/img/logo.png">
    <link rel="stylesheet" href="./assets/css/plantilla.css">
    <style>
        .text-fis{
            color:#FACA07 !important;
            /* color:#000 !important; */
        }
    </style>
    <script src="./js/plantillahead.js"></script>
</head>

<body>

    <div id="app">
        <div class="header-bg">
            <!-- Navigation Bar-->
            <header id="topnav">
                @include('templates.topnav')
                <!-- end topbar-main -->
                @include('templates.header')
            </header>
            <!-- End Navigation Bar-->
            <div class="wrapper">

                <div class="container-fluid">

                    @yield('contenido')
                </div>
            </div>
        </div>
        


        @include('templates.footer')
    </div>
    
    <!-- App js -->
    <script src="./js/app.js"></script>
    <!-- plantilla  -->
        {{-- <script>$().DataTable();</script> --}}
    <script src="./js/plantilla.js"></script>
</body>

</html>