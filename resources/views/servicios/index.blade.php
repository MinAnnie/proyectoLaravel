@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2>Vista del INDEX</h2>
<a href="servicios/create" class="btn btn-outline-info mb-3">Crear un servicio</a>
<table id="servicios" class="table table-dark table-stripped mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th>Id</th>
            <th>Nombre del servicio</th>
            <th>Tipo de servicio</th>
            <th>acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($servicios as $servicio)
        <tr>
        <td>{{$servicio->id}}</td>
        <td>{{$servicio->nombreServicio}}</td>
        <td>{{$servicio->TipoServicio}}</td>
        <td>
            <form action="{{route ('servicios.destroy' , $servicio->id)}}" method="post"> 
                @csrf
                @method('DELETE')
                <a href="servicios/{{$servicio->id}}/edit" class="btn btn-outline-success">Editar</a>
                <button class="btn btn-outline-danger">Eliminar</button>
            </form>
        </td>
        </tr>
        @endforeach
    
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
    $('#servicios').DataTable();
        } );
    </script>
@stop