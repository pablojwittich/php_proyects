<?php
include "../models/connection.php";

session_start();

if (!empty($_POST["iniciar-sesion"]))
{
  if (!empty($_POST["Luser"]) and !empty($_POST["Lpass"]))
  {
        $usuario = $_POST["Luser"];
        $password = $_POST["Lpass"];
        $sql = $conn->query("SELECT * FROM users WHERE usuario='$usuario' AND password='$password'");

        if ($datos = $sql->fetch_object())
        {
          $_SESSION['id']=$datos->id;
          $_SESSION['usuario']=$datos->usuarios;
          $_SESSION['password']=$datos->passwords;
          $_SESSION['email']=$datos->emails;

          header("Location: ../views/index.php");
        }
        else 
        {
          echo "Acceso denegado";
        }
        
  } 
  else 
  {
        echo "Campos vacios";
  }
}
?>
