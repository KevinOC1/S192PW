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
<body>
<div class="container mt-5 col-md-6">
  <div class="card font-monospace">
    <div class="card-header fs-5 text-center text-primary">
      Convertidor de Unidades
    </div>
    <div class="card-body text-justify">
      
      <form action=" " method="POST">
        @csrf
        {{-- Campo para ingresar el valor --}}
        <div class="mb-3">
          <label for="value" class="form-label">Ingrese el valor</label>
          <input type="number" step="0.01" class="form-control" id="value" name="value" required>
        </div>

        {{-- Selección del tipo de conversión --}}
        <div class="mb-3">
          <label for="type" class="form-label">Seleccione la conversión</label>
          <select class="form-select" id="type" name="type" required>
            <option value="MBtoGB">MB a GB</option>
            <option value="GBtoMB">GB a MB</option>
            <option value="GBtoTB">GB a TB</option>
            <option value="TBtoGB">TB a GB</option>
          </select>
        </div>

        {{-- Botón de conversión --}}
        <div class="card-footer text-muted">
          <div class="d-grid gap-2 mt-2 mb-1">
            <button type="submit" class="btn btn-success btn-sm">Convertir</button>
          </div>
        </div>
      </form>

      {{-- Muestra el resultado si existe --}}
      @if (isset($result))
        <div class="mt-3 alert alert-info text-center">
          <strong>Resultado: {{ $result }}</strong>
        </div>
      @endif

    </div>
  </div>
</div>
{{-- Fin tarjeta de formulario --}}
</body>
</html>