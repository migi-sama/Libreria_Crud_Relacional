<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('titulo', 'Libreria')</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
    body{
    background-color: #c6d9f5;
    }
    .container{
    margin-top: 4%;
    background: #fff;
    border-radius: 0.5rem;
    }
    .headerP{ 
      display:flex;
      background-color: #630000;
      color: aliceblue;
      align-items:center;
      justify-content:center;
      border-radius: 0.5rem;
    }
    
    </style>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('libro.index') }}">Libros <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('genero.index') }}">Generos</a>
            </li>
            </ul>
            
        </div>
    </nav>
    <div class="container">
        
      <header class="headerP py-3">
        @yield('encabezado')
      </header>
      <br><br><br>
      <div style="padding: 1%;">
        @yield('contenido')
      </div>
    </div>
  </body>
</html>
