<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$cadena = "aaAA";
$patron1 = "/^[a-z]+$/";
$patron2 = "/^[a-z]+$/i";

if (preg_match($patron1, $cadena)) {
    print "<p>La cadena $cadena son sólo letras minúsculas.</p>\n";
} else {
    print "<p>La cadena $cadena no son sólo letras minúsculas.</p>\n";
}

if (preg_match($patron2, $cadena)) {
    print "<p>La cadena $cadena son sólo letras minúsculas o mayúsculas.</p>\n";
} else {
    print "<p>La cadena $cadena no son sólo letras minúsculas o mayúsculas.</p>\n";
}
?>
</body>
</html>