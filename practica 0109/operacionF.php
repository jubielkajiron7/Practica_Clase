<?php 
$a = $_REQUEST['valor1'];
$b = $_REQUEST['valor2'];

if ($_REQUEST['operador']=="suma") {
	$r_suma = sumar($a,$b);
	echo "La suma es: $r_suma";
}

if($_REQUEST['operador']== "resta"){
	$r_resta = restar($a,$b);
	echo "La resta es: $r_resta";
}

if ($_REQUEST['operador']== "multiplicacion"){
	$r_multiplicacion = multiplicar($a,$b);
	echo "La multiplicacion es: $r_multiplicacion";
 }
if ($_REQUEST['operador']== "division"){
	$r_division = dividir($a,$b);
	echo "La division es: $r_division";
 }

function sumar($a,$b) {
	$suma = $a+$b;
	return $suma;
}

function restar($a,$b) {
	$resta = $a-$b;
	return $resta;
}

function multiplicar($a,$b) {
	$multiplicacion = $a*$b;
	return $multiplicacion;
}

function dividir($a,$b) {
	$division = $a/$b;
	return $division;
}

?>