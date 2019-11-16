@extends('template')

@section('titulo','Servicios')

@section('nombre','Listado de servicios')

@section('contenido')


<a href="{{route('servicios.create')}}" class="btn btn-success">Nuevo Servicio</a>
<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripci&oacute;n</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($servicios as $item)
            <tr>
                <td>{{$item->nombre}}</td>
                <td>{{$item->descripcion}}</td>
                <td><a href="/servicios/{{$item->descripcion}}/edit" class="btn btn-warning">Editar</a></td>
                <td><a href="/servicios/{{$item->descripcion}}" class="btn btn-danger">Eliminar</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
