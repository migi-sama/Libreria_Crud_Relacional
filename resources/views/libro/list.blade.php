@extends('plantilla')

@section('encabezado')
   <h2>Listado de libros</h2>
@endsection

@section('contenido')
  
  <a href="{{ route('libro.create') }}" class="btn btn-success mb-2">Agregar</a> 
  <br>
   <div class="row">
        <div class="col-12 text-center">
         @if (count($libros) >= 1)
          <table class="table table-bordered" id="laravel_crud">
           <thead class="align-self-center">
              <tr>
                 <th>Id</th>
                 <th>Título</th>
                 <th>Autor</th>
                 <th>Sinopsis</th>
                 <th>Fecha de publicación</th>
                 <th>Género</th>
                 <th colspan="2">Acción</th>
              </tr>
           </thead>
           <tbody>
            @foreach($libros ?? '' as $libro)
            <tr>
                <td>{{ $libro->id }}</td>
                <td>{{ $libro->titulo }}</td>
                <td>{{ $libro->autor }}</td>
                <td>{{ $libro->sinopsis }}</td>
                <td>{{ $libro->fecha->format('d M Y') }}</td>
                <td>{{ $libro->genero->nombre }}</td>
                <td>
                
                <a href="{{route('libro.edit',$libro->id)}}" class="btn btn-primary">
                    <i class="fa fa-edit"></i>
                Editar</a></td>
                <td>
                    <form action="{{ route('libro.destroy', $libro->id) }}" method="post">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button class="btn btn-danger fa fa-trash-alt" type="submit" 
                        onclick="return confirm('¿Está seguro de eliminarlo?')">
                        Eliminar</button>
                    </form>
                </td>
            </tr>

            @endforeach
           </tbody>
          </table>
          {!! $libros ?? ''->links() !!}
          @else
            <h2>No hay registros aún.</h2>
          @endif
       </div> 
   </div>
 @endsection