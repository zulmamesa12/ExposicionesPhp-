<html>
<head>
	<title></title>
</head>
<body>
	<?php

			/*AUTOCARGA DE CLASES 

			es utlizado para no tener q incluir o importar tantas clases con la palabra reservada include a la hora de trabajar con clases 
			en diferentes archivos

			es decir las clases se auto-importan*/ 

			spl_autoload_register(function ($Clase1) {

   					 include $Clase1.'.php';
   					 include $Clase2.'.php';

			}

 			$obj=new Clase1("Anderson","Alarcon",19);  
 			$obj2=new Clase2("otro","otro",20);
			
			echo $obj2->nombre;
			echo $obj->nombre;

	?>
</body>
</html>