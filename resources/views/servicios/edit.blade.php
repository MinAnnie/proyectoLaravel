@extends('adminlte::page')

@section('title', 'Editar Servicios')

@section('content_header')
    <h1>Editar los Servicios</h1>
@stop

@section('content')
<form action="/servicios/{{$servicio->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="" class="form-label">Nombre del servicio</label>
      <input type="text"
        class="form-control" name="nombreServicio" id="" aria-describedby="helpId" placeholder="" value="{{$servicio->nombreServicio}}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">tipo  de servicio</label>
      <input type="text"
        class="form-control" name="tipoServicio" id="" aria-describedby="helpId" value="{{$servicio->tipoServicio}}" placeholder="">
    </div>
    <a name="" id="" class="btn btn-outline-danger" tabindex="5" href="/servicios" role="button">Cancelar</a>
    <button type="submit" class="btn btn-outline-success" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop