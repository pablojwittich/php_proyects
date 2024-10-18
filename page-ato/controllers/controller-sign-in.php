<?php
include("../models/connection.php");

session_start();
if (!empty($_POST["registrarse"])) {
  if (!empty($_POST["nombre"]) or !empty($_POST["apellido"]) or !empty($_POST["email"]) or !empty($_POST["regis-contraseña1"])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $contraseña = $_POST["regis-contraseña1"];

    $sql = $conn->query("insert into users(nombre,apellido,email)values('$nombre','$apellido','$email')");

    if (($_POST["regis-contraseña1"])!=($_POST["regis-contraseña2"])) {
        echo "Las contraseñas tiene que ser iguales";
    } else {
       $sql = (md5($conn->query("insert into users"(contraseña)values('$contraseña'))));
    }
    if ($sql == 1) {
      echo "alert("Registrado correctamente!");";
      header(Location: ../views/index.php);
    }
  } else {
    echo "Acceso denegado";
  }
  
} else {
  echo "Algunos campos estan vacios";
}



?>
