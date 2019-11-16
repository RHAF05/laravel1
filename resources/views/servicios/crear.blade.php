@extends('template')

@section('titulo','Crear servicio')

@section('contenido')

    <form action="" method="post">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required class="form-control">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripci&oacute;n</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar Servicio</button>
        </div>
    </form>

@endsection
