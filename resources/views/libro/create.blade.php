@extends('plantilla')

@section('encabezado')
   <h2>Agregar Libro</h2>
@endsection
 
@section('contenido')

<br>
 
<form action="{{ route('libro.store') }}" method="POST" name="add_libro">
{{ csrf_field() }}
 
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <strong>Título</strong>
            <input type="text" name="titulo" class="form-control" placeholder="Ingrese título">
            <span class="text-danger">{{ $errors->first('titulo') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>Autor</strong>
            <input type="text" name="autor" class="form-control" placeholder="Ingrese Autor">
            <span class="text-danger">{{ $errors->first('autor') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>Sinopsis</strong>
            <textarea class="form-control" col="4" name="sinopsis" placeholder="Ingrese Sinopsis"></textarea>
            <span class="text-danger">{{ $errors->first('sinopsis') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>Fecha</strong>
            <input type="date" name="fecha" class="form-control">
            <span class="text-danger">{{ $errors->first('fecha') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>Género</strong>
            <select name="genero_id" id="genero_id" class="form-control">
            <option value="">--Seleccione--</option>
            @foreach($generos as $genero)
                <option value="{{$genero['id']}}"> {{$genero['nombre']}} </option>
            @endforeach
            </select>
            <span class="text-danger">{{ $errors->first('genero') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
 
</form>
@endsection