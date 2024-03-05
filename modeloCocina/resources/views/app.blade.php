<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../recursosSM/logoSM_solo.png">
    <link rel="stylesheet" src="">
    <title>Cocina Modelo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header>
      <h1 style="text-align: center">Cocina Modelo</h1>
    </header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Menu
        </a>
    <ul class="dropdown-menu">
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
  </body>
</html>