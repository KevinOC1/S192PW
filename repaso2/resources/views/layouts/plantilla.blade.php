<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js']) 
    <title>@yield('titulo') </title>
    <style>
    html, body {
      height: 110%;
      margin: 0;
      display: flex;
      flex-direction: column;
    }
    .container {
      flex: 1;
      
    }
    footer {
  width: 100%;
  position: relative;
  bottom: 0;
}
  </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <p>      3422      </p>
        <a class="navbar-brand" href="{{route('rutaprincipal')}}">Libros chilos</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

            <li class="nav-item active">
              <a class="nav-link" href="{{route('rutaregistro')}}">{{__('REGISTRO')}} <span class="sr-only"></span></a>
            </li>

          </ul>
        </nav>
        <div class="container">
        @yield('contenido')
        </div>
        
        <!-- pie de pagina  -->
        <div class="container">
        <footer class="py-3 my-4">
  <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Biblioteca de libros chilos</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Kevin.O</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"> <span id="fecha"></span> </a></li>
  </ul>
  <p class="text-center text-muted">© 2024 libros chilos, Inc.</p>
</footer>
</div>
<script>
  function actualizarFecha() {
    const hoy = new Date();
    const opciones = { year: 'numeric', month: 'long', day: 'numeric' };
    const fechaFormateada = hoy.toLocaleDateString('es-ES', opciones);
    document.getElementById('fecha').textContent = fechaFormateada;
  }
    actualizarFecha();
    </script>
</body>
</html>