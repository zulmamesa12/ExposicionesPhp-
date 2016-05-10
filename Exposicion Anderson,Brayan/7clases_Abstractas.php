<?php
 /*CLASES ABSTRACTAS
son clases que tienen atributos y metodos , q luego seran heredados por otras subclases

- En las clases abstractas no se pueden instanciar 
- Una clase abstracta obliga a q sus metodos sean utilizados por las sublclases
- cualquier clase q tenga un metodo abstracto debe ser abstracta
-una clase  abstracta puede tener metodos normales*/

	abstract class Molde{

		//metodos abstractos

		public abstract function ingresarNombre();
		public abstract function obtenerNombre();



	} 


	class Persona extends Molde{
		

		private $nombre="Anderson";

		public function mostrar (){

			echo $this->nombre;

		}

		//METODOS DE LA CLASE ABSTRACTA
		public  function ingresarNombre(){
			echo " ";
		}

		public  function obtenerNombre(){
			echo " ";

		}

	}

	$per= new Persona();
	$per->mostrar();


?>