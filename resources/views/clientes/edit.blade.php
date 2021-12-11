@extends('adminlte::page')

@section('title', 'Editar Cliente')

@section('content_header')
    <h1>Editar los Clientes</h1>
@stop

@section('content')
<form action="/clientes/{{$clientes->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="" class="form-label">Nombre del cliente</label>
      <input type="text"
        class="form-control" name="nombreCliente" id="" aria-describedby="helpId" placeholder="" value="{{$clientes->nombreCliente}}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">documento</label>
      <input type="number"
        class="form-control" name="documento" id="" aria-describedby="helpId" value="{{$clientes->Documento}}" placeholder="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">temperatura</label>
      <input type="number"
        class="form-control" name="temperatura" id="" aria-describedby="helpId" value="{{$clientes->temperatura}}" placeholder="">
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