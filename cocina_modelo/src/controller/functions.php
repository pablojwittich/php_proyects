<?php
include '/xampp/htdocs/cocina_modelo/model/connection.php';

$query = "SELECT * FROM personal";

$sql = @mysqli_query($connCocina, $query);

if($sql == true){echo true;}
    else{echo false;}




?>