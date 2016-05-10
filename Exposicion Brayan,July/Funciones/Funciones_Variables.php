<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function hola()
{
    echo "Hola impreso desde una funcion <br />";
}
function mundo()
{
    echo "Mundo impreso desde una funcion <br />";
}
function hola1()
{
    echo "hola 1 impreso por una variable creando el nombre concatenando cadenas <br />";
}
 
$mifuncion = "hola";
$mifuncion(); //llama a la funcion hola()
 
$mifuncion= "mundo";
$mifuncion(); //llama a la funcion mundo()
 
$i="1";
$mifuncion= "hola" . $i; 
$mifuncion(); //llama a la funcion hola1 ya que se concatenó 2 textos y salió ese nombre de funcion
?>

</body>
</html>