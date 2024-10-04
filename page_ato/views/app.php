<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>A tus ordenes</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sq
    </head>
    <body style="width:85%; display:flex; justify-content: center">
        <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a href="index.php">
                <img id="logo" src="resources/LocoComunidadApostolica-1.png" style="width: 3em; heith:3em; border-radius:50px; margin:0.5em 0.5em 0.5em 0.5em">
            </a>
            <a class="navbar-brand" href="index.php" style="color:black; ">A tus ordenes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav" style="margin-left:35em;">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="quienes.php" style="color:black">Quienes somos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="vision.php" style="color:black">Vision</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="mision.php" style="color:black" >Mision</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black">
                    Dropdown link
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        </header>
    </body>
</html>
