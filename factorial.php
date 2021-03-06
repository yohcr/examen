<?php
/*
	Yohana E. Chavez Reyes
	05 de Marzo, 2020
	Descripcion: Codigo que encuentra el factorial de cualquier número natural positivo
	Entradas:
		$num => numero natural positivo
	Salidas:
		$rest => factorial
*/
do{
	$num = readline("Ingresa numero: ");
}while($num<=0);

$rest = 1;

for ($i=$num; $i>0 ; $i--) { 
	$rest = $rest*$i;	
}

echo "El factorial de ".$num." es: ".$rest;


?>