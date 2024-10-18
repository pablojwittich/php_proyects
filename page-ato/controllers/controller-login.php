<?php
include ("../models/connection.php");

session_start();
# Si los campos del post iniciar-sesion NO estan vacios haz..
if (!empty($_POST["iniciar-sesion"])){
  # Si los campos del post email y pass NO estan hacios haz ..
  if (!empty($_POST["Lemail"]) && !empty($_POST["Lpass"])){
        # Guardar los datos del post en variables
        $email = $_POST["Lemail"];
        $password = $_POST["Lpass"];
        
        # Guardar dichos datos de la variables en la tabla users
        $sql = $conn->query("SELECT * FROM users WHERE email='$email' AND password='$password'");

        if ($datos = $sql->fetch_object()){
          $_SESSION['id']=$datos->id;
          $_SESSION['usuario']=$datos->usuarios;
          $_SESSION['password']=$datos->passwords;
          $_SESSION['email']=$datos->emails;

          header("Location: ../views/index.php");
        }else{
            echo "Acceso denegado";
        }
# Si estan vacios haz..
}else{
  echo "Los campos estan vacios";
  }
}
?>
