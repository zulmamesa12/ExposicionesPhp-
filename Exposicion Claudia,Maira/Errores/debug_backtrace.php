<?php
// nombre de archvio: /tmp/a.php

function una_prueba($str)
{
    echo "\nHola: $str";
    var_dump(debug_backtrace());
}

una_prueba('amigo');
?>

<?php
// nombre de archvio: /tmp/b.php
include_once '/tmp/a.php';
?>