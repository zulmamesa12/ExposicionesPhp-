<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php
		
		$saludo = function($nombre)
		{
		    printf("Hola %s\r\n</br></br></br>", $nombre);
		};

		$saludo('Mundo');
		$saludo('PHP');

	?>

</body>
</html>