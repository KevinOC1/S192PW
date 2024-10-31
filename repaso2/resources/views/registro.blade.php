@extends('layouts.plantilla')
@section('contenido')

<div class="container">
  <form action="registrarlibro" method="POST" class="mx-auto" style="max-width: 600px;">
  @csrf 

  <div class="form-group row">
      <label for="inputvehiculo" class="col-sm-3 col-form-label text-right">ISBN</label>
      <div class="col-sm-9">
        <input name="txtISBN" type="num" class="form-control" id="inputvehiculo" value="{{ old ('txtISBN') }}" >
        <small class="fst-italic text-danger" >{{$errors->first('txtISBN')}}</small>
      </div>
    </div>

    <div class="form-group row">
      <label for="inputvehiculo" class="col-sm-3 col-form-label text-right">Título</label>
      <div class="col-sm-9">
        <input name="txtTitulo" type="text" class="form-control" id="inputvehiculo" value="{{ old ('txtTitulo') }}" >
        <small class="fst-italic text-danger" >{{$errors->first('txtTitulo')}}</small>
      </div>
    </div>

    <div class="form-group row">
      <label for="inputmodelo" class="col-sm-3 col-form-label text-right">Autor</label>
      <div class="col-sm-9">
        <input name="txtAutor" type="text" class="form-control" id="inputmodelo" value="{{ old ('txtAutor') }}">
        <small class="fst-italic text-danger" >{{$errors->first('txtAutor')}}</small>
      </div>
    </div>

    <div class="form-group row">
      <label for="inputPuertas" class="col-sm-3 col-form-label text-right">Páginas</label>
      <div class="col-sm-9">
        <input name="txtPaginas" type="text" class="form-control" id="inputPuertas" value="{{ old ('txtPaginas') }}">
        <small class="fst-italic text-danger" >{{$errors->first('txtPaginas')}}</small>
      </div>
    </div>

    <div class="form-group row">
      <label for="inputLuces" class="col-sm-3 col-form-label text-right">Año</label>
      <div class="col-sm-9">
        <input name="txtAño" type="text" class="form-control" id="inputLuces" value="{{ old ('txtAño') }}">
        <small class="fst-italic text-danger" >{{$errors->first('txtAño')}}</small>
      </div>
    </div>

    <div class="form-group row">
      <label for="inputeditorial" class="col-sm-3 col-form-label text-right">Editorial</label>
      <div class="col-sm-9">
        <input name="txteditorial" type="text" class="form-control" id="inputeditorial" value="{{ old ('txteditorial') }}">
        <small class="fst-italic text-danger" >{{$errors->first('txteditorial')}}</small>
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail" class="col-sm-3 col-form-label text-right">Email de Editorial</label>
      <div class="col-sm-9">
        <input name="txtemail" type="email" class="form-control" id="inputEmail" value="{{ old ('txtemail') }}">
        <small class="fst-italic text-danger" >{{$errors->first('txtemail')}}</small>
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