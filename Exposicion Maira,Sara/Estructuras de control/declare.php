<?php

declare(ticks=1);

// Una función llamada en cada evento tick
function tick_handler()
{
    echo "tick_handler() llamado\n";
}

register_tick_function('tick_handler');

$a = 1;

if ($a > 0) {
    $a += 2;
    print($a);
}

?>