<?php
// archivo include.php
function a() {
    b();
}

function b() {
    c();
}

function c(){
    debug_print_backtrace();
}

a();

?>
<?php
// archivo prueba.php
// este es el archivo que debe ejecutar

include 'include.php';
?>