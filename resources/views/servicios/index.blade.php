@extends('layouts.template');

@section('content')
<h2>Vista del INDEX</h2>
<a href="servicios/create" class="btn btn-outline-info">Crear un servicio</a>
<table class="table table-dark table-stripped mt-4">
    <thead>
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
@endsection