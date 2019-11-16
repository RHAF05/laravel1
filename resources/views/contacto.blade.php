@extends('template')

@section('titulo')
    CONTACTO
@endsection

@section('contenido')
    <h1>CONTACTENOS</h1>
    Hola {{ $nombre }}, se que tienes {{$edad}}

    @if($edad>+18)
        <p>usted es mayor de edad, no se haga el loco</p>
    @else
        <p>usted es un pelaito.</p>
    @endif

    @for($i=0;$i<=20;$i++)
        <p>Numero {{$i}}</p>
    @endfor
@endsection
