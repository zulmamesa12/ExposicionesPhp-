<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	function hacer_yogur($sabor, $tipo = "acidófilo")
	{
	    return "Hacer un tazón de yogur $tipo de $sabor.\n";
	}

	echo hacer_yogur("frambuesa");   // funciona como se esperaba
?>
</body>
</html>