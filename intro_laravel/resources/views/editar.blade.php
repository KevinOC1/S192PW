@extends('layouts.plantilla1')

@section('titulo','editar')

@section('contenido')

          {{-- inica tarjeta de formulario --}}
          <div class="container mt-5 col-md-6">

            <div class="card font-monospace">
              <div class="card-header fs-5 text-center text-primary">
                Editar Cliente
              </div>
              <div class="card-body text-justify">
                
                <form action="{{ route('rutaupd', $cliente->id) }}" method="POST">

                  @csrf 
                  @method('PUT')

                  <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre'</label>
                    <input type="text" class="form-control form-control-ig bordet-0 shadow-sm" id="name" name="nombre" value="{{$cliente->nombre}}" required>
                    <small class="fst-italic text-danger" >{{$errors->first('txtnombre')}}</small>
                  </div>
                  
                  <div class="mb-3">
                   <label for="apellido" class="form-label">Apellido</label>
                   <input type="text" class="form-control form-control-ig bordet-0 shadow-sm" id="apellido" name="apellido" value="{{$cliente->apellido }}" required>
                   <small class="fst-italic text-danger">{{ $errors->first('apellido') }}</small>
                  </div>

                  <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" class="form-control form-control-ig bordet-0 shadow-sm" id="correo" name="correo" value="{{$cliente->correo }}" required>
                    <small class="fst-italic text-danger">{{ $errors->first('correo') }}</small>
                  </div>

                  <div class="mb-3">
                   <label for="telefono" class="form-label">Teléfono</label>
                   <input type="tel" class="form-control form-control-ig bordet-0 shadow-sm" id="telefono" name="telefono" value="{{$cliente->telefono }}" required>
                   <small class="fst-italic text-danger">{{ $errors->first('telefono') }}</small>
                  </div>

                  <div class="card-footer text-muted">
                    <div class="d-grid gap2 mt-2 mb-1">
                      <button type="submit" class="btn btn-success btn-sm"> Actualizar </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
    @endsection