<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8" lang="es">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<title>Wittich Editores</title>
	</head>
	<body style="width:95%; margin: 0 auto;">
		<header>
			<h1 style="text-align:center; padding-top: 1em; color:#521c19">Wittich Editores</h1>
		</header>
		<nav class="navbar navbar-expand-lg" style="background-color:#3e1815; border-radius: 10px;">
  			<div class="container-fluid">
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
      		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        		<li class="nav-item">
          			<a style="color:white" class="nav-link active" aria-current="page" href="{{route('index')}}">Inicio</a>
        		</li>
        		<li class="nav-item">
          			<a style="color: white" class="nav-link" aria-current="page" href="{{route('quienes')}}">Quienes Somos</a>
        		</li>
				<li class="nav-item">
          			<a style="color:white" class="nav-link" aria-current="page" href="{{route('libros')}}">Libros</a>
        		</li>
				<li class="nav-item">
          			<a style="color:white" class="nav-link" aria-current="page" href="{{route('contacto')}}">Contacto</a>
        		</li>
  			</div>
		</nav>
	</body>
</html>

