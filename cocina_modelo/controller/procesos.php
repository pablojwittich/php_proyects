<?php
include '/xampp/htdocs/cocina_modelo/model/connection.php';

//REVISAR INTERACION CON LA BD


echo
                '<ul>
                    <li>
                        <label for="desayuno">Desayuno</label>
                        <input type="radio" name="desayuno" />
                    </li>
                    <li>
                        <label for="almuerzo">Almuerzo</label>
                        <input type="radio" name="almuerzo" />
                    </li>
                    <li>
                        <label for="merienda">Merienda</label>
                        <input type="radio" name="merienda" />
                    </li>
                    <li>
                        <label for="cena">Cena</label>
                        <input type="radio" name="cena" />
                    </li>
                </ul>';
?>
