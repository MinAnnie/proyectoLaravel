@extends('layouts.template');

@section('content')
<h1>Crear un servicio</h1>
<form action="/servicios" method="post">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Nombre del servicio</label>
      <input type="text"
        class="form-control" name="nombreServicio" id="" aria-describedby="helpId" placeholder="Nombre del servicio" required>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">tipo  de servicio</label>
      <input type="text"
        class="form-control" name="tipoServicio" id="" aria-describedby="helpId" placeholder="tipo de servicio" required>
    </div>
    <a name="" id="" class="btn btn-outline-danger" tabindex="5" href="/servicios" role="button">Cancelar</a>
    <button type="submit" class="btn btn-outline-success" tabindex="4">Guardar</button>
</form>
@endsection