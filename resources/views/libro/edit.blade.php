@extends('plantilla')

@section('encabezado')
   <h2>Editar Libro</h2>
@endsection
 
@section('contenido')

 
<form action="{{ route('libro.update', $libro_info->id) }}" method="POST" name="update_libro">
{{ csrf_field() }}
@method('PATCH')
 
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <strong>Título</strong>
            <input type="text" name="titulo" class="form-control" placeholder="Ingrese Título" value="{{ $libro_info->titulo }}">
            <span class="text-danger">{{ $errors->first('titulo') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>Autor</strong>
            <input type="text" name="autor" class="form-control" placeholder="Ingrese Autor" value="{{ $libro_info->autor }}">
            <span class="text-danger">{{ $errors->first('autor') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>Sinopsis</strong>
            <textarea class="form-control" col="4" name="sinopsis" placeholder="Ingrese Sinopsis">{{ $libro_info->sinopsis }}</textarea>
            <span class="text-danger">{{ $errors->first('sinopsis') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>Fecha</strong>
            <input type="date" name="fecha" class="form-control" value="{{$libro_info->fecha}}">
            <span class="text-danger">{{ $errors->first('fecha') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>Género</strong>
            <select name="genero_id" id="genero_id" class="form-control">
                @foreach($generos as $genero)
                    <option @if($genero->id == $libro_info->genero_id) selected  @endif
                        value="{{$genero['id']}}"> {{$genero['nombre']}} </option>
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