<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 


$i = 3;

do {
    if ($i < 5) {
        echo "i no es lo suficientemente grande";
        break;
    }
    $i *= $factor;
    if ($i < $minimum_limit) {
        break;
    }
   echo "i está bien";

    /* procesar i */

} while (0);



 ?>

</body>
</html>