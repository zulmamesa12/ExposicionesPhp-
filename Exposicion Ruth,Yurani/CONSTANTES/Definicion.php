<!DOCTYPE html>
<html>
<head>
	<title>constantes</title>
</head>
<body>
<pre>
<?php
//una constate  puede definer de dos formas 
// usando la función define() 
define("C", "345");
echo C;?> <br>
$array=array("1","2","3");
<?php 
//usando palabra resevada  const 
const k122 = 23;
echo k122;
$array=array("1","2","3");
var_dump($array)
//const 122 = 23;//no se puede definir una constante con numeros
//echo 122;
?>
</pre>

</body>
</html>