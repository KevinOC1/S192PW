@extends('layouts.plantilla1')

@section('titulo','Clientes')

@section('contenido')


      {{-- tarjetacliente --}}
      <div class="container mt-5 col-md-8">
      @session('exito')
            <x-Alert tipo="danger"> {{ $value }} </x-Alert>
            @endsession

            @session('exito')
            <script>
              Swal.fire({
                title: "Respuesta servidor",
                 text: '{{ $value }}',
                 icon: "success"
                });
            </script>
            @endsession

        @foreach ($consultarClientes as $cliente)

      <div class="card text-justify font-monospace">

        <div class="card-header fs-5 text-primary">
          {{$cliente-> nombre }}
        </div>
        <div class="card-body">
          <h5 class="fw-bold">{{$cliente-> correo }}</h5>
          <h5 class="fw-medium">{{$cliente-> telefono }}</h5>
          <p class="card-text fw-lighter"></p>

        </div>

        <div class="card-footer text-muted">
                <a href="{{route('rutaedit', $cliente->id)}}" class="btn btn-warning btn-sm">Actualizar</a>
                <form action="{{route('rutadestroy',$cliente->id)}}" method="POST" style="display:inline-block;" onsubmit="return confirm('Estas apunto de eliminar a este usuario?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>

      </div>
      {{-- finaliza tarjetacliente --}}
      @endforeach
      </div>

      @endsection