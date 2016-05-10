<?php 


class Persona {

	public $nombre="Anderson";
	public $apellido="Alarcon";
	public $edad=19;

}


trait t1{

	public $fuerza=95;

}

trait t2{

	public $agresividad=90;

}



class Guerrero extends Persona{


	use t1,t2;  //uso los trait 


	public function infGuerrero(){

		echo $this->nombre." ".$this->apellido." ".$this->edad."<br>";
		
		echo $this->fuerza."<br>";
		echo $this->agresividad."<br>";

	}


}


//instanciamiento 

$gue=new Guerrero();
$gue->infGuerrero();










































/*TRAITS

los traits son pedazos de codigo, similares  una clase , pueden tener lo q tiene una clase 

se utilizan para reutilizar codigo , y tratar de arreglar el tema de la herencia simple
como las interfaces 
agrupa funcionalidades


ej; Si se tiene una clase a una  b  y una c, y la clase b hereda de la  a , enotnces q pasa si la clase b necesita aglo de la c , no puede heredar , por motivos de la herencia simple 
 asi q se usa un traits 


*/


?>