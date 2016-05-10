<?php

/*INTERFACES

son un conjunto de metodos q utilizaran las clases, conel proposito de solucionar el problema de la herencia multiple

- las clases pueden implementar mas deuna interfaz
-  cuando una clase  implementa una interfaz , esta debe implemenatar todos los metodos 
*/

	interface  Person {

		public function hablar ();

	}

	interface Person2{

		public function correr();

	}


	class Persona implements Person,Person2{

		//propiedades

		private $nombre;
		private $edad;

		//cosntructor
		public function __construct(){

			$this->nombre="Anderson";
			$this->edad=19;

		}

		//METODOS DE LAS INTERFACES
		public function hablar(){

			echo "Yo hablo";
		}

		public function correr(){

			echo "Yo corro";
		}

	}

	$obj=new Persona();

	//echo $obj->nombre;
	echo $obj->hablar();
	echo $obj->correr();


?>