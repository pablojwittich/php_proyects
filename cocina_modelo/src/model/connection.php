<?php 
require 'vendor/autoload.php';
class Connection 
{
    private string $host = "localhost";
    private string $user = "root";
    private string $pass = "exito";
    private string $bd = "cocinamodelo";


    public function connectionBD()
    {
        $conn = @mysqli_connect($host,$user,$pass,$bd);
    }
    


}


?>