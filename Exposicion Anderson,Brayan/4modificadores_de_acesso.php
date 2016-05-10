<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	/*VISIBILIDAD-MODIFICADORES DE ACCESO

	Es la forma en como podemos acceder a las propedades y metodos de un objeto

	public , se puede utilizar en todas las clases 
	protected, desde la misma clase o clases heredadas
	private  solo se puede utilizar desde la clase, y  desde un metodo,

	MODIFICADORES DE PROPIEDADES Y METODOS 
	*/

	 class Facebook{
		//ATRIBUTOS

		public $nombre;
		public $edad;
		private $contrasenia;

		//CONSTRUCTOR

		public function __construct($nombre,$edad,$contrasenia){

			$this->nombre=$nombre;
			$this->edad=$edad;
			$this->contrasenia=$contrasenia;


		}

		//METODOS 

		public function verInformacion (){

				echo "Nombre: ".$this->nombre."<br>";
				echo "Edad: ".$this->edad."<br>";
				echo "constrasenia: ".$this->contrasenia."<br>";  //private pero sirve atravez de un metodo

		}

		private function saludoDeInicio(){

				echo "Hola Anderson";

		}


	}




	$obj=new Facebook("Anderson",19,123);	

	//propiedades

	$obj->nombre="Zulmis";   //prop publica
	$obj->contrasenia=321; 	// prop privada 

	echo $obj->nombre; 		
	echo $obj->contrasenia;	//ERROR

	/*metodos

	$obj->verInformacion(); //metodo publico 
	$obj->saludoDeInicio();	   //metodo privado*/
	





?>
</body>
</html>