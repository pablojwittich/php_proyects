<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{!! asset('favicon.ico') !!}" type="image/x-icon">
    <link rel="stylesheet" href="{!! asset('css/estilos.css') !!}">
    <title>Cocina Modelo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="padding-left: 2em; padding-right:2em">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header>
      <h1 style="text-align: center; color:#25569E; padding-top:1em;">COCINA MODELO</h1>
    </header>
    <nav style="background-color:#BEE1E2; margin-bottom:1em; font-size:1.2em;border-radius:50px; padding-left:2em" class="navbar navbar-expand-lg ">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul style="background-color: #BEE1E2" class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a  class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul style="background-color: #BEE1E2"  class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('nuevosClientes')}}">Nuevo Cliente</a></li>
            <li><a class="dropdown-item" href="{{route('nuevosBenef')}}">Nuevo Beneficio</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('beneficio') }}">Beneficio</a>
        </li>
      </ul>
    </nav>
    <main style="padding-left: 1em; padding-right:1em">
     <script src="{{ asset('js/app.js') }}"></script>
    </main>
  </body>
</html>
