<?php

require "../models/connection.php";

class signIn extends connection{


  if (isset($_POST["btn-register"]))
  {
    if (
      !empty($_POST["Rname"]) &&
      !empty($_POST["Rsurname"]) &&
      !empty($_POST["Remail"]) &&
      !empty($_POST["Rpass1"]) &&
      !empty($_POST["Rpass2"]))
    {
      if ($_POST["Rpass1"] === $_POST["Rpass2"])
      {
        $name = $_POST["Rname"];
        $surname = $_POST["Rsurname"];
        $email = $_POST["Remail"];
        $pass = password_hash($_POST["Rpass1"], PASSWORD_DEFAULT);

        $query ="INSERT INTO users(name, surname, email, password)VALUES(?,?,?,?)";

        $stmt = mysqli_prepare($conn, $query);

        mysqli_stmt_bind_param(
          $stmt,
          "ssss",
          $name,
          $surname,
          $email,
          $pass);

          if (mysqli_stmt_execute($stmt))
          {
            $_SESSION["message"] = "Registrado correctamente";
            header("Location: ../views/index.php");
            exit();
          }
          else
          {
            $_SESSION["error"] = "Registro fallido";
            header("Location: ../views/login.php");
            exit();
          }
            mysqli_stmt_close($stmt);
        }
        else
        {
          echo "Las contraseñas tienen que ser iguales";
        }
    }
    else
    {
      echo "Falta algunos campos por completar";
    }
  }
}
