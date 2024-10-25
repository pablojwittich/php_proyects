<?php
/*
// connection no POO
$servername = "127.0.0.1";
$username = "root";
$password = "123";
$database = "ato_db";

$conn = new mysqli($servername, $username, $password, $database);
$conn->set_charset("utf8");
 */

class connection
{
  private string $servername = "127.0.0.1";
  private string $username = "root";
  private string $password = "123";
  private string $database = "ato_db";

  public function connection()
  {
    $conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
    $conn->set_charset("utf8");

    if(!$conn)
    {
      die("Conexión fallida: ". mysqli_connect_error());
    }
    else
    {
      ehco "Conexión exitosa";
    }
  }
}
?>
