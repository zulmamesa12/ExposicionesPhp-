<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

<?php 

$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
}
// $array ahora es array(2, 4, 6, 8)
unset($valor); // rompe la referencia con el último elemento



 ?>

</body>
</html>