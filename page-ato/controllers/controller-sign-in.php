<?php 
include("../models/connection.php");

if(!empty($_POST['btn-register']))
{
  if(!empty($_POST['Rname']) && !empty($_POST['Rsurname']) && !empty($_POST['Remail']) && !empty($_POST['Rpass1']) && !empty($_POST['Rpass2']))
  {
    if(($_POST['Rpass1']) === ($_POST['Rpass2']))
    {
      $name = ($_POST['Rname']);
      $surname = ($_POST['Rsurname']);
      $email = ($_POST['Remail']);
      $pass = password_hash($_POST["Rpass1"], PASSWORD_DEFAULT); // Usar password_hash para mayor seguridad

      //$consulta = "INSERT INTO users('name', 'surname', 'email', 'password') VALUES ('$name','$surname','$email','$pass')";
      $consulta = "INSERT INTO `users`(`name`, `surname`, `email`, `password`) VALUES ('".$name."','".$surname."', '".$email."', '".$pass."')";
      //$resultado = mysqli_query($conn, $consulta);


      if(mysqli_query($conn, $consulta))
      {
        echo "Registrado correctamente";
        header("Location:../views/index.php");
      }
      else
      {
        echo "Error: ".$consulta." ".mysqli_error($conn);
      }
    }
    else
    {
      echo "Las contraseñas tienen que ser iguales";
    }
  }
  else 
  {
    echo "Acceso denegado";
  }
}
else 
{
  echo "Algunos campos estan vacios";
}

?>
