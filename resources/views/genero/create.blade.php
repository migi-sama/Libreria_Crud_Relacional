@extends('plantilla')

@section('encabezado')
   <h2>Agregar Género</h2>
@endsection
 
@section('contenido')

<br>
 
<form action="{{ route('genero.store') }}" method="POST" name="add_genero">
{{ csrf_field() }}
 
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <strong>Nombre</strong>
            <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
            <span class="text-danger">{{ $errors->first('nombre') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>Descripción</strong>
            <textarea class="form-control" col="4" name="descripcion" placeholder="Ingrese Descripción"></textarea>
            <span class="text-danger">{{ $errors->first('descripcion') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
 
</form>
@endsection
