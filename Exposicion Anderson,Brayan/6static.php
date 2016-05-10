<?php 

	/*OPERADOR DE RESOLUCION DE AMBITO  
	:: 
	-es utlizado en constates y metodos estaticos cuando quiero hacer un llamado


	USO STATIC, hay propiedades y metodos static , significa q son de la clase , 
	, quiere descir q no tenemos q instanciar una clase cuando hacemos un llamado*/


	class miClase{

		//propiedades

		public const nombre="Anderson";


		//metodos

		public static function miMetodo(){

			echo "Hola ADSI 1020185";


		}


	}

	echo miClase::$nombre;
	miClase::miMetodo();  

	//$obj=new miClase();  NO SE TUVO Q HACER ESTA LINEA 

	

?>