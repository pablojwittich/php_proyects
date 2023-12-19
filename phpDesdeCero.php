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
		'Belen' => 27,
	];
	print_r($edad);

	$nombres = ["Pablo","Belen"];
	print_r($nombres);

	#CONSTATES
	#Valor que no puede variar durante la ejecución del script
	#Sintaxis
	#define("nombreConst", "Valor constante(string)");
	#Ej:
	define("c", 23);


	#Estructuras de control
	#

