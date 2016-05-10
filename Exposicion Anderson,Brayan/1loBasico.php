<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
									//POO

		
		
		//CLASES
		class Persona{ 


				//PROPIEDADES

				public  $nombre;	
				public  $apellido;
				public  $edad;	

				

				//CONSTRUCTOR

				public function __construct($nombre,$apellido,$edad){

						$this->nombre=$nombre;
						$this->apellido=$apellido;
						$this->edad=$edad;
				}

				

				//METODOS

				function caminar(){

					echo "Yo camino";

				}


				/*DESTRUCTOR, los destructotres son lo contrario al metodo constructor , este destruye el objeto, suele utilizarse para liberar memoria, 
							se ejecuta cuando el objeto es eliminado*/

				public function __destruct(){

						echo "</br>he muerto, ya no camino";

				}


		}

				//OBJETO INSTANCIA DE UNA CLASE
		
				//Persona obj=new Persona("Pepito","Ann",81); JAVA 
				 $obj=new Persona("Pepito","Ann",81);  

				 echo $obj->nombre." ".$obj->apellido." ".$obj->edad."</br>";
				 echo $obj->caminar();
				// unset($obj);


				




	?>
</body>
</html>