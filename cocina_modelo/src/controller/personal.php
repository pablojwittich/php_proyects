<?php
include '/xampp/htdocs/cocina_modelo/model/connection.php';

/*REVISAR INTERACION CON LA BD
 ^
 | */
$queryPersonal = "SELECT * FROM personal";
$sqlPersonal = mysqli_query($connCocina, $queryPersonal);
$fetchPersonal = mysqli_fetch_array($sqlPersonal);

$legjo = $fetchPersonal['legajo'];
$nombre = $fetchPersonal['nombre'];
$apellido = $fetchPersonal['apellido'];




echo

                '<ul display="none">
                    <li>
                        <label for="legajo">N° Legajo:</label>
                        <input type="number" id="legajo" name="legajo" autofocus/>
                    </li>
                    <li>
                        <label for="nombre">Nombre</label>
                        <input type="text"  name="nombre"/>
                    </li>
                    <li>
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido"/>
                    </li>
                </ul>';
?>