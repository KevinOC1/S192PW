

@extends('layouts.plantilla1')


@section('titulo','clientes')
@section('cliente')


      {{-- tarjetacliente --}}
      <div class="container mt-5 col-md-8">
      
      <div class="card text-justify font-monospace">

        <div class="card-header fs-5 text-primary">
          Ordaz Cuevas Kevin Isaac
        </div>
        <div class="card-body">
          <h5 class="fw-bold">kioc989@gmail.com</h5>
          <h5 class="fw-medium">4225673290</h5>
          <p class="card-text fw-lighter"></p>

        </div>

        <div class="card-footer text-muted">
          <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
          <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
        </div>

      </div>
      @endsection