<?php
/*
$variable = "Manu"; 

echo "hola " . $variable ;

*/

/*
$numero_1 = 3;
$numero_2 = 2;

$suma = $numero_1 + $numero_2;

echo $suma;
*/

/*
define("NOMBRE", "Manuel Lima");

for ($i=0; $i < 10; $i++) { 
	echo $i . ". Hola " . NOMBRE;
	echo "<br/>";
}

*/

function print_array ($arr) {
	foreach ($arr as $key => $valor) {
		echo $valor . " ";
	}
}


function are_equal($var1, $var2) {
	if ($var1 == $var2) {
		echo "iguales" ;
	} else {
		echo "distintos" ;
	}
}

?>