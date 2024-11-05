<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js']) 
    <title>Document</title>
    
</head>
<body>

    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container  col-md-4">

    <form action="rutare" method="POST" class="mx-auto" style="max-width: 600px;">
  @csrf 

  @if (session('exito'))
            <x-Alert tipo="success"> {{ session('exito') }} </x-Alert>
            <script>
              Swal.fire({
                title: "Respuesta",
                 text: '{{ session('exito') }}',
                 icon: "success"
                });
            </script>
           @endsession


        <div class="mb-3">
            <label  for="correo" class="form-label">Correo: </label>
            <input type="text" class="form-control" name="txtcorreo" value="{{ old ('txtcorreo') }}">
            <small class="fst-italic text-danger" >{{$errors->first('txtcorreo')}}</small>
        </div>

        <div class="mb-3">
            <label  for="contraseña" class="form-label"> Contraseña: </label>
            <input type="text" class="form-control" name="txtcontraseña" value="{{ old ('txtcontraseña') }}">
            <small class="fst-italic text-danger" >{{$errors->first('txtcontraseña')}}</small>
        </div>
        
        
        <div class="mb-3">
            <label  for="edad" class="form-label"> Edad: </label>
            <input type="text" class="form-control" name="txtedad" value="{{ old ('txtedad') }}">
            <small class="fst-italic text-danger" >{{$errors->first('txtedad')}}</small>
        </div>
        
        
        <button type="submit" class="btn btn-danger "> Guardar Usuario</button>


</div>


</body>
</html>