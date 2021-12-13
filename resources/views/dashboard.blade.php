@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CRUD servicios</h5>
        <p class="card-text">Aquí podrá ver los servicios disponibles, y podrá editar, eliminar o crear nuevos servicios</p>
        <a href="servicios/" class="btn btn-info">Ir a servicios</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CRUD Clientes</h5>
        <p class="card-text">Aquí podrá ver los clientes que han ingresado a las instalaciones, su nombre, documento y temperatura registrada.</p>
        <a href="clientes/" class="btn btn-info">ir a clientes</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CRUD Insumos</h5>
        <p class="card-text">Aquí podrá ver los Insumos disponibles, podrá crear, editar y eliminar según necesite.</p>
        <a href="insumos/" class="btn btn-info">ir a insumos</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">CRUD Usuarios</h5>
          <p class="card-text">Aquí podrá ver los usuario que han sido registrados, podrá registrar, editar y eliminar según necesite.</p>
          <a href="usuarios/" class="btn btn-info">ir a usuarios</a>
        </div>
      </div>
    </div>
  </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
