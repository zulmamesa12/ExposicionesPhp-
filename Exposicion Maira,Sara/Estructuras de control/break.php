<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>

<?php 

$arr = array('uno', 'dos', 'tres', 'cuatro', 'pare', 'cinco');
while (list(, $val) = each($arr)) {
    if ($val == 'pare') {
        break;    /* Se puede también escribir 'break 1;' aquí. */
    }
    echo "$val<br />\n";
}

/* Utilizar el argumento opcional. */

$i = 0;
while (++$i) {
    switch ($i) {
    case 5:
        echo "En 5<br />\n";
        break 1;  /* Sólo sale del switch. */
    case 10:
        echo "En 10; saliendo<br />\n";
        break 2;  /* Sale del switch y del while. */
    default:
        break;
    }
}




 ?>

</body>
</html>