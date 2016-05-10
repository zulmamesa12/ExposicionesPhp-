<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<pre>
<?php


$arrUsers = array();
$arrayUser = array(false => "Carlos","Apellidos" => "Caro", "Edad" => 23, "Estado" => "Inactivo", "Nombre" => "Pedro");
/*array_push($arrUsers, array("Nombre" => "Diego","Apellidos" => "Ojeda", "Edad" => 22, "Estado" => array("Activo","Inactivo")));
//array_push($arrUsers, );
array_push($arrUsers, array("Nombre" => "Julio","Apellidos" => "Peña", "Edad" => 30, "Estado" => "Activo"));
array_push($arrUsers, "Hola");*/

foreach ($arrayUser as $key => $value) {
	echo "<b>".$key."</b> = ".$value."\n";
}

//var_dump($arrUsers);

//$carlota = array("carla","carlota");
//	echo $carlota¨{0};
 ?>
</pre>

</body>
</html>