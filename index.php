<?php
/*
	Yohana E. Chavez Reyes
	05 de Marzo, 2020
	Descripcion: Codigo que verifica si un ISBN-10 es correcto 
				mostrando en pantalla un true si lo es o false 
				en caso contrario.
	Entradas:
		$codigo_isbn => Codigo isbn-10
	Salidas:
		$esCorrecto => valor booleano
*/

/*function comprobar($suma): bool{
	$resultado = false;
	if($suma%11==0){
		$resultado = true;
		return $resultado;
	}
	return $resultado;
}*/

$codigo_isbn = readline("Ingresa el código ISBN: ");
$numeros = [];
$base = 10;
$suma = 0;
$rest = false;

for ($i=0; $i<strlen($codigo_isbn); $i++) {
	if(is_numeric($codigo_isbn[$i])){
		$numeros[] = $codigo_isbn[$i]; 
	}
}

for($i=0; $i<count($numeros); $i++){
	$aux = $numeros[$i]*$base;
	$suma = $suma + $aux;
	$base--;
}

if($suma%11==0){
	$rest = true;
}
	
echo "Resultado: ".$rest;

?>