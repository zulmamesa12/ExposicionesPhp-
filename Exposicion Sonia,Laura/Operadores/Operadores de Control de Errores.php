<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
/* Error intencional de archivo */
$my_file = @file ('non_existent_file') or
    die ("La apertura de archivo ha fallado: el error fue '$php_errormsg'");

// esto funciona con cualquier expresión, no solo con funciones:
$value = @$cache[$key];
// no producirá una anotación si el índice $key no existe.

?>
</body>
</html>