<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function añadir_algo(&$cadena)
{
    $cadena .= 'y algo más.';
}
$cad = 'Esto es una cadena, ';
añadir_algo($cad);
echo $cad;    // imprime 'Esto es una cadena, y algo más.'
?>
</body>
</html>