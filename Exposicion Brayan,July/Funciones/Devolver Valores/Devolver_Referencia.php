<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php
		

function &devolver_referencia()
{
    return $algunaref;
}

$nuevaref = &devolver_referencia();

var_dump($nuevaref);

	?>


</body>
</html>