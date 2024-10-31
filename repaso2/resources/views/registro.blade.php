@extends('layouts.plantilla')
@section('contenido')

<div class="container">
  <form action="/guardar" method="POST" class="mx-auto" style="max-width: 600px;">
    
    <div class="form-group row">
      <label for="inputvehiculo" class="col-sm-3 col-form-label text-right">Título</label>
      <div class="col-sm-9">
        <input name="vehiculo" type="text" class="form-control" id="inputvehiculo" >
      </div>
    </div>

    <div class="form-group row">
      <label for="inputmodelo" class="col-sm-3 col-form-label text-right">Autor</label>
      <div class="col-sm-9">
        <input name="modelo" type="text" class="form-control" id="inputmodelo" >
      </div>
    </div>

    <div class="form-group row">
      <label for="inputPuertas" class="col-sm-3 col-form-label text-right">Páginas</label>
      <div class="col-sm-9">
        <input name="puertas" type="text" class="form-control" id="inputPuertas" >
      </div>
    </div>

    <div class="form-group row">
      <label for="inputLuces" class="col-sm-3 col-form-label text-right">Año</label>
      <div class="col-sm-9">
        <input name="luces" type="text" class="form-control" id="inputLuces" >
      </div>
    </div>

    <div class="form-group row">
      <label for="inputeditorial" class="col-sm-3 col-form-label text-right">Editorial</label>
      <div class="col-sm-9">
        <input name="editorial" type="text" class="form-control" id="inputeditorial" >
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail" class="col-sm-3 col-form-label text-right">Email de Editorial</label>
      <div class="col-sm-9">
        <input name="email" type="email" class="form-control" id="inputEmail" x>
      </div>
    </div>
    <div>
       
    </div>

    <div class="form-group row">
      <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
    </div>

  </form>
</div>


@endsection