<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
/*
 * Ignore la sección superior,
 * es sólo el formateado para hacer la salida más clara.
 */

$format = '(%1$2d = %1$04b) = (%2$2d = %2$04b)'
        . ' %3$s (%4$2d = %4$04b)' . "\n";

echo <<<EOH
 ---------     ---------  -- ---------
 resultado     valor      op prueba
 ---------     ---------  -- ---------
EOH;


/*
 * Aquí están los ejemplos.
 */

$values = array(0, 1, 2, 4, 8);
$test = 1 + 4;

echo "\n AND bit a bit \n";
foreach ($values as $value) {
    $result = $value & $test;
    printf($format, $result, $value, '&', $test);
}

echo "\n OR inclusivo bit a bit \n";
foreach ($values as $value) {
    $result = $value | $test;
    printf($format, $result, $value, '|', $test);
}

echo "\n OR exclusivo (XOR) bit a bit \n";
foreach ($values as $value) {
    $result = $value ^ $test;
    printf($format, $result, $value, '^', $test);
}
?>
</body>
</html>