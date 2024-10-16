<?php

# Mediante esta condicion decimos que NO esta vacio todo lo que se envia a la variable "iniciar-sesion" haga lo siguiente
if (!empty($_POST["iniciar-sesion"])) 
{
  # Si el campo email y pass estan vacio haz...
  if (empty($_POST["Lemail"]) and empty($_POST["Lpass"])) 
  {
    echo "Los campos estan vacios";
  } else 
  {
    echo "sos gay";
  }
  
}
?>
