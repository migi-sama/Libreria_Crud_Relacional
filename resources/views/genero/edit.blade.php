@extends('plantilla')

@section('encabezado')
   <h2>Editar Género</h2>
@endsection
 
@section('contenido')

 
<form action="{{ route('genero.update', $genero_info->id) }}" method="POST" name="update_genero">
{{ csrf_field() }}
@method('PATCH')
 
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <strong>Nombre</strong>
            <input type="text" name="nombre" class="form-control" placeholder="Ingrese Nombre" value="{{ $genero_info->nombre }}">
            <span class="text-danger">{{ $errors->first('nombre') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>Descripción</strong>
            <textarea class="form-control" col="4" name="descripcion" placeholder="Ingrese Descripción" >{{ $genero_info->descripcion }}</textarea>
            <span class="text-danger">{{ $errors->first('descripcion') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
 
</form>
@endsection
