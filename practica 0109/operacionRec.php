 <?php 
$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];

if ($_REQUEST['operador']=="area") {
	$r_area = area($a,$b);
	echo "La suma es:", $r_area;
}

if ($_REQUEST['operador']=="expresion") {
	$r_expresion = expresion($a,$b,$c);
	echo "La suma es: $r_expresion";
}


function area($a,$b){
	$ae = $a*$b;
	return $ae;
}

function expresion($a,$b,$c){
	$exp = ($a+7*$c)/($b+2-$a)+2*$b;
	return $exp;
}
?>