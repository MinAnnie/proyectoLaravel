@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
    <p>Vista index Usuarios</p>
    <a href="http://127.0.0.1:8000/usuarios/create" class="btn btn-outline-info mb-3">Crear un usuario</a>
<table id="usuarios" class="table table-dark table-stripped mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th>Id</th>
            <th>Nombre del usuario</th>
            <th>Tipo de usuario</th>
            <th>documento</th>
            <th>acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
        <td>{{$usuario->id}}</td>
        <td>{{$usuario->nombreUsuario}}</td>
        <td>{{$usuario->tipoUsuario}}</td>
        <td>
            <form action="{{route ('usuarios.destroy' , $usuario->id)}}" method="post"> 
                @csrf
                @method('DELETE')
                <a href="usuarios/{{$usuario->id}}/edit" class="btn btn-outline-success">Editar</a>
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
    $('#usuarios').DataTable();
        } );
    </script>
@stop