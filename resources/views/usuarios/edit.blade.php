@extends('adminlte::page')

@section('title', 'Editar usuarios')

@section('content_header')
    <h1>Editar usuarios</h1>
@stop

@section('content')
<form action="/usuarios/{{$usuario->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="" class="form-label">Nombre del Usuario</label>
      <input type="text"
        class="form-control" name="nombreUsuario" id="" aria-describedby="helpId" placeholder="" value="{{$usuario->nombreUsuario}}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">tipo  de Usuario</label>
      <input type="text"
        class="form-control" name="tipoUsuario" id="" aria-describedby="helpId" value="{{$usuario->tipoUsuario}}" placeholder="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">documento</label>
      <input type="text"
        class="form-control" name="documento" id="" aria-describedby="helpId" value="{{$usuario->documento}}" placeholder="">
    </div>
    <a name="" id="" class="btn btn-outline-danger" tabindex="5" href="/usuarios" role="button">Cancelar</a>
    <button type="submit" class="btn btn-outline-success" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop