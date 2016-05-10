<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		//Si se omite return, el valor devuelto será NULL.
		//return devuelve el control del programa al módulo que lo invoca. 
		//La ejecución vuelve a la siguiente expresión después del módulo que lo invoca.

		function cuadrado($núm)
		{
		    return $núm * $núm;
		}
		echo cuadrado(4);   // imprime '16'.

	?>


</body>
</html>