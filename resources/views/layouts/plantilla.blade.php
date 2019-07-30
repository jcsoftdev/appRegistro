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
    
  </head>
  <body>
        <div class="container">
          <div id="app">
            
            @component('componentes.header')
            @endcomponent
            @yield('contenido')

          </div>



          @component('componentes.footer')
          @endcomponent
        </div>

        <script src="./js/plantilla.js"></script>
        <script src="./js/app.js"></script>
      </body>
</html>