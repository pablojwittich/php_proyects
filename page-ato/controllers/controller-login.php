<?php
# Incluye la conexión a la BD 
include ("../models/connection.php");

# Inicia una nueva sesión o reanudar la existente
session_start();
# Si los campos del post iniciar-sesion NO estan vacios haz..
if (!empty($_POST["btn-login"])){
  # Si los campos del post email y pass NO estan hacios haz ..
  if (!empty($_POST["Lemail"]) && !empty($_POST["Lpass"])){
        # Guardar los datos del post en variables
        $email = $_POST["Lemail"];
        $password = $_POST["Lpass"];
        
        # Guardar dichos datos de la variables en la tabla users
        $sql = $conn->query("SELECT * FROM users WHERE email='$email' AND password='$password'");

        # Si la variable dato es igual al conjunto de objetos devuelto por fetch_object
        if ($datos = $sql->fetch_object()){

          #Guarda los datos del usuario que inicio la session
          $_SESSION['name']=$datos->names;
          $_SESSION['surname']=$datos->surname;
          $_SESSION['password']=$datos->passwords;
          $_SESSION['email']=$datos->emails;

          # Re-dirigir al index
          header("Location: ../views/index.php");
        }else{ # Si no coinciden los varibles del POST con la BD
            
            echo "Acceso denegado";
        }
}else{ # Si estan vacios haz..
  echo "Los campos estan vacios";
  }
}
?>
