<?php
require 'vendor/autoload.php';

class CocinaModelo
{
    private string $host = "localhost";
    private string $user = "root";
    private string $pass = "exito";
    private string $bd = "cocinamodelo";

    // Getter & Setter
    // HOST
    public function getHost():string{return $this->host;}
    public function setHost(string $host){$this->host = $host;}

    // USER
    public function getUser():string{return $this->user;}
    public function setUser(string $user){$this->user = $user;}

    // PASS
    public function getPass():string{return $this->pass;}
    public function setPass(string $pass){$this->pass = $pass;}

    // BD
    public function getBd(){return $this->bd;}
    public function setBd(string $bd){$this->bd = $bd;}

    public function __construct()
    {
        $connCocina = @mysqli_connect($this->host, $this->user, $this->pass, $this->bd);
        if(!$connCocina){echo "conexion fallida"; die();}
            else{echo "conecion exitosa";}


    }



}



?>