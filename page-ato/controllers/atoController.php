<?php
require "../models/connection.php";
class atoController extends connection
{
  public function signIn()
  { 
    if(isset($_POST["btn-register"]))) # si se el boton se aprieta..
    {
      if( # Si los campos NO estan vacios 
        !empty($_POST["Rname"]) &&
        !empty($_POST["Rsurname"]) &&
        !empty($_POST["Remail"]) &&
        !empty($_POST["Rpass1"]) &&
        !empty($_POST["Rpass2"]))
      {
        if (($_POST["Rpass1"])===($_POST["Rpass2"]))# Si las password son iguales
        {
          # Guardar lo que se inserto en los input en variables
          $name = $_POST["Rname"];
          $surname = $_POST["Rsurname"];
          $email = $_POST["Remail"];
          $pass = password_hash($_POST["Rpass1"], PASSWORD_DEFAULT); # Se guarda la pass de esta forma por seguridad

          # Se preparea la consulta sql
          $query = "INSERT INTO users(name, surname, email, password)VALUES(?, ?, ?, ?)";

          # Se guarda la consulta con la conexión en una variable 
          $stmt = mysqli_prepare($conn, $query);

          # Agrega las varialbes en una sentencia sql
          mysqli_stmt_bind_param(
            $stmt,
            "ssss",
            $name,
            $surname,
            $email,
            $pass);

          if(mysqli_stmt_execute($stmt))# Si la sentencia sql se ejecuta de forma correcta..
          {
            $_SESSION["message"] = "Registro correcto";
            header("Location: ../views/index.php");
            exit();
          }
          else
          {
            $_SESSION["error"] = "Registro fallido";
            header("Location: ../views/login.php");
            exit();
          }
          # Cerramos la sentencia 
          mysqli_stmt_close($stmt);

          #Cerramos la conexión con la BD
          mysqli_close($conn);

        }
        else
        {
          return "Las contraseñas tienen que ser iguales";
        }
      }
      else
      {
        return "Falta algunos campos a completar";
      }
    }

  }
  public function login()
  {
    # Inicia una una sesión
    session_start();
    if(!empty($_POST["btn-login"])) #Si el boton del login NO esta vacio..
    {
      if(!empty($_POST["Lemail"]) && (!empty($_POST["Lpass"]))) # Si los input de login NO esta vacio..
      {
        # Guardar los datos de la input
        $email = $_POST["Lemail"];
        $pass = $_POST["Lpass"];

        # Se guarda la sentencia sql en una variable
        $query = ("SELECT * FROM users WHERE email='?' AND password='?'");

        # se prepara la sentencia sql, con la conexión a la BD en una una variable
        $stmt = mysqli_prepare($conn, $query);
        
        # Agrega las varialbes de la sentencia
        mysqli_stmt_bind_param(
          $stmt,
          "ss",
          $email,
          $pass);

        if(mysqli_stmt_execute($stmt))# Si la ejecución de la sentencia es correcta...
        {
          $_SESSION["message"] = "Login correcto";
          header("Location: ../views/index.php");
          exit();
        }
        else
        {
          $_SESSION["error"] = "Login fallido";
          header("Location: ../views/login.php");
          exit();
        }

        # Cerramos la secuencia
        mysqli_stmt_close($stmt);

        # Cerramos la conexión de BD
        mysqli_close($conn);

      }
      else
      {
        return "Acceso denegado";
      }
    }
    else
    {
      return "algunos campos estan vacios";
    }
  }
  public function signOut()
  {

  }
}
