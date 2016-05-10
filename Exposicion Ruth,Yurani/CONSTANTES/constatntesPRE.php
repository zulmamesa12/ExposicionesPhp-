<!DOCTYPE html>
<html>
<head>
	<title>CONSTATNTES PREDDEFINIDAS</title>
	<style>
	body{ font-family: Arial;
		font-size: 28px}
	}

	</style>
</head>
<body>
<pre>

<div>
<?php 
# La constante del sistema __LINE__ nos devolverá  
	//el número de línea que se está interpretando
# también cuenta las líneas en blanco
# cuenta las líneas y verás que devuelve ... 16

echo "<br>Esta es la línea: ",__LINE__, " del archivo";


# La constante del sistema __FILE__ nos devolverá 
	echo "<br>La ruta completa de este archivo es: ";
	echo __FILE__;


?><br><?php 
echo "Estamos utilizando la versión: ",PHP_VERSION, " de PHP";
echo "<br>El PHP se está ejecutando desde el sistema operativo: ",PHP_OS;
print"<br>La carpeta donde esta ubicado el archivo";
echo"<br>", __DIR__;
?>
</div>
<?php

function  trabajo(){
	print "activo la funcion ";
	echo "<br> el nombre de la funcion es   ",__FUNCTION__;
}
trabajo();

/*class clase {
	echo"nombre de la clase es :",__CLASS__;
    }*/

/*trait  {
    function traitName() {echo __TRAIT__;}
}

trait PeanutButterAndJelly {
    use PeanutButter;
}*/

 ?>



</pre>

</body>
</html>
