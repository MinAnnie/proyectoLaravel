@extends('adminlte::page')

@section('title', 'Agregar Cliente')

@section('content_header')
    <h1>Agregar Cliente</h1>
@stop

@section('content')
<form action="/clientes" method="post">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Nombre del cliente</label>
      <input type="text"
        class="form-control" name="nombreCliente" id="" aria-describedby="helpId" placeholder="Nombre del cliente" required>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">documento</label>
      <input type="number"
        class="form-control" name="Documento" id="" aria-describedby="helpId" placeholder="documento" required>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">temperatura</label>
      <input type="number"
        class="form-control" name="temperatura" id="" aria-describedby="helpId" placeholder="temperatura" required>
    </div>
    <a name="" id="" class="btn btn-outline-danger" tabindex="5" href="/clientes" role="button">Cancelar</a>
    <button type="submit" class="btn btn-outline-success" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop