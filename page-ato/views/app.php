<?php
include("../models/connection.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/128/17572/17572589.png">
  <style>
    * {
      border: 0;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: #EFEFEF;
    }

    nav {
      display: table;
      height: 100px;
      padding-left: 3em;
      padding-right: 3em;
      background-color: #BFC0C1;
      margin: 0 auto;
      width: 100%;
    }

    a {
      color: black;
      text-decoration: none;
      display: table-cell;
      vertical-align: middle;
      padding-left: 1em;
      padding-right: 1em;
    }

    .logo {
      width: 4em;
      height: 4em;
      border-radius: 50px;
    }

    .index {
      padding-right: 30em;
    }
  </style>
</head>

<body>
  <section>
    <header>
      <nav>
        <!--<a href="index.php"><img class="logo" src="https://cdn-icons-png.flaticon.com/128/17572/17572589.png"></a>
                <div>
                  #<?php
                    # echo $_SESSION["usuario"];
                    #
                    ?>
                </div>-->
        <a class="index" href="index.php">A tus ordenes!</a>
        <a href="quienes.php">Quiénes somos</a>
        <a href="vision.php">Visión</a>
        <a href="mision.php">Misión</a>
        <a class="inicio" href="login.php">Iniciar Sesión</a>
      </nav>
    </header>
  </section>
</body>

</html>
