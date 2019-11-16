@extends('template')

@section('titulo')
    PRODUCTOS
@endsection

@section('contenido')

    @foreach ($productos as $item)
        <p><b>C&oacute;digo: </b>{{$item->codigo}}</p>
        <p><b>Nombre: </b>{{$item->nombre}}</p>
        <p><b>Precio: </b>{{$item->precio}}</p>
    @endforeach

@endsection
