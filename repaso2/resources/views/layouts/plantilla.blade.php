<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js']) 
    <title>@yield('titulo') </title>
    <style>
    </style>
</head>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    $('#carouselExampleControls').carousel();
  });
</script>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('rutaprincipal')}}">inicio</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

            <li class="nav-item active">
              <a class="nav-link" href="{{route('rutaregistro')}}">Registro <span class="sr-only"></span></a>
            </li>

          </ul>
        </nav>

        @yield('contenido')
      
</body>
</html>