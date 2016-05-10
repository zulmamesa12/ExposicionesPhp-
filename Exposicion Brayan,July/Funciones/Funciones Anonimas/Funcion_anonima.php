<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php

		echo preg_replace_callback('~-([a-z])~', function ($coincidencia) {
		    return strtoupper($coincidencia[1]);
		}, 'Hola a todos');
		// imprime holaMundo

	?>


</body>
</html>