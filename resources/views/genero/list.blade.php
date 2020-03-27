@extends('plantilla')

@section('encabezado')
   <h2>Listado de géneros</h2>
@endsection

@section('contenido')

@if(session('success'))
    <script>alert('{{session('success')}}'); </script>
@endif
  <a href="{{ route('genero.create') }}" class="btn btn-success mb-2">Agregar</a> 
  <br>
   <div class="row">
        <div class="col-12 text-center">
         @if (count($generos) >= 1)
          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Nombre</th>
                 <th>Descripción</th>
                 <th colspan="2">Acción</th>
              </tr>
           </thead>
           <tbody>
            @foreach($generos ?? '' as $genero)
            
            <tr>
                <td>{{ $genero->id }}</td>
                <td>{{ $genero->nombre }}</td>
                <td>{{ $genero->descripcion }}</td>
                <td>
                
                <a href="{{ route('genero.edit', $genero->id) }}" class="btn btn-primary">
                    <i class="fa fa-edit"></i>
                Editar</a></td>
                <td>
                    <form action="{{ route('genero.destroy', $genero->id) }}" method="post">
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
          {!! $generos ?? ''->links() !!}
          @else
            <h2>No hay registros aún.</h2>
          @endif
       </div> 
   </div>
 @endsection