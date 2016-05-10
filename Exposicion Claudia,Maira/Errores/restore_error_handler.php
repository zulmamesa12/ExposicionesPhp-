<?php
function gestor_unserialize($errno, $errstr)  //unserialize — Crea un valor PHP a partir de una representación almacenada
{
    echo "Valor seriado inválido.\n";
}

$seriado = 'foo';
set_error_handler('gestor_unserialize');
$original = unserialize($seriado);
//restore_error_handler();
?>