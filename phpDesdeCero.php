<?php #tag de apertura 
	$nombre = "Pablo"; #Variable (string) -> comienza con el signo peso y al finalizar cada sentencia se cierra con (;)	
	$edad = 25; #Variable (integer)
	$altura = 1.85; #Variable (float)
	$bool = true; #Variable (booleano)

	echo ("Mi nombre es ".$nombre.", tengo ".$edad." y mi altura es ".$altura); #echo imprime los datos dados
	echo "<br>"; # salto de linea en web
	# tambien se puede utilizar "\n" para salto de linea pero no se vera en el navegador, si en un terminal.
	echo "Los booleanos cuando se imprimen se representan por un numero en caso del false es el 0 y en el caso del true es un ".$bool;

	# Operaciones aritmeticas
	$a = 10;
	$b = 53;

	#Suma
	echo "\n".$a+$b;

	#Resta
	echo "\n".$a-$b;

	#Multiplicacion
	echo "\n".$a*$b;

	#Division
	echo "\n".$a/$b;

	#ARRAYS
	#conjunto de datos
	#Sintaxis
	#$array=[
	#	"clave0" => valor0;
	#	"clave1" => valor1;
	#];
	
	$edad = [
		'Pablo'	=> 25,
		'Belen' => 27
	];
	print_r($edad);

	$nombres = ["Pablo","Belen"];
	print_r($nombres);

	#CONSTATES
	#Valor que no puede variar durante la ejecución del script
	#Sintaxis
	#define("nombreConst", "Valor constante(string)");
	#Ej:


	#Estructuras de control
	#Sirven para recorrer conjuntos de datos como arrays.
	
	#BUCLE FOR - Ejemplo1
	/*$nombre = "Pablo";
	$array = [1,2,3,"casa",$nombre];

	#Saco la longitud de numeros de elementos.
	$longitud = count($array);

	#Recorro todos los elementos 
	for ($i=0; $i < $longitud; $i++)
	{
			if ($array[$i] != "casa")
			{
				echo "No encontre una casa \n";
			} else 
				{
					echo "Encontre la casa \n";
				}
	}*/

	#Ejemplo 2
	$array1 = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",];

	$abecedario = count($array1);

	for ($i=0; $i < $abecedario; $i++)
	{
			if ($array1[$i] != "a" && $array1[$i] != "e" && $array1[$i] != "i" && $array1[$i] != "o" && $array1[$i] != "u")
			{
					echo "consonante \n";
			}
				else
				{
						echo "vocal \n";
				}
	}

	#BUCLE FOREACH
	#Sintaxis
	#foreach ($variable as $value){}
	#Ejemplo1

	$arr = ["uno","dos","tres","cuatro","cinco"];

	foreach ($arr as $value)
	{
					if ($value != "uno")
					{
								echo "No es uno\n";
					}
					else 
					{
									echo "Es uno\n";
					}
	}

	#foreach asociativo
	#Sintaxis
	#foreach($variable as $key => $value){}
	#Ejemplo 2
	$canasta	= [
		"Frutas"=>"Manzana",
		"Verdura"=>"Palta",
		"Frutas"=>"Banana",
		"Verdura"=>"Zapallo",
		"Frutas"=>"Sandia"
	];
	foreach ($canasta as $Frutas => $value )
	{
		if ($canasta[$Frutas] != "Manzana")
		{
			echo "No es Manzana\n";
		}
		else
		{
			echo "Es una manzana";
		}
	}

				
	
