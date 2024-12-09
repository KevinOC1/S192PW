<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js']) 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>
    @if (session('exito'))
           
            <script>
              Swal.fire({
                title: "Respuesta",
                icon: "success",
                 text: "{{ session('exito') }}"
                });
            </script>
           @endsession
    <div class="container  col-md-4">
    

    <form action="{{ route('rutare') }}" method="POST">

        @csrf 


        <div class="mb-3">
            <label  class="form-label">Correo: </label>
            <input type="text"name="txtcorreo" class="form-control" value="{{ old ('txtcorreo') }}" >
            <small class="fst-italic text-danger" >{{$errors->first('txtcorreo')}}</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Contraseña: </label>
            <input type="text" name="txtcontraseña"class="form-control" value="{{ old ('txtcontraseña') }}" >
            <small class="fst-italic text-danger" >{{$errors->first('txtcontraseña')}}</small>
        </div>                

        <div class="mb-3">
            <label  class="form-label">Edad: </label>
            <input type="text" name="txtedad"class="form-control" value="{{ old ('txtedad') }}" >
            <small class="fst-italic text-danger" >{{$errors->first('txtedad')}}</small>
        </div>



        <button type="submit" class="btn btn-danger "> Guardar Usuario</button>


</div>
</body>
</html>