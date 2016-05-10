<?php
// Enviar una notificación al registro del servidor si no podemos
// conectarnos a la base de datos.
if (!Ora_Logon($username, $password)) {
    error_log("¡La base de datos de Oracle no está disponible!", 0);
}

// Notificar al administrador mediante un email si agotamos FOO
if (!($foo = allocate_new_foo())) {
    error_log("Problema serio, nos hemos quedado sin FOOs!", 1,
               "operator@example.com");
}

// otra manera de llamar a error_log():
error_log("¡Lo echaste a perder!", 3, "/var/tmp/my-errors.log");
?>