<?php 
/*Herencia, 

Una clase puede heredar de otra , cupliendo con la frase "Es un"
php no permite herencia multiple al igual q java,una clase no puede heredar de dos o mas

la sublclase o clase hijo puede utilizar atributos y metodos de la clase padre
*/
//CLASE PADRE
    class Vehiculo{          
        
        public $marca;
        public $ruedas;
        public $color;
        
        public function __construct(){
            
            $this->marca="renault";
            $this->ruedas=4;
            $this->color="blanco";
            
        }
        
        public function acelerar(){
            
            return "Yo acelero";
            
        }    
    
    }

//CLASE HIJA , SUBCLASE

    class Camioneta extends Vehiculo{     
    
        //no tiene propiedades

        public function __construct(){

            parent::__construct(); 

        }

        //no tieene metodos---------------------------------------------------------
        
    }

//INSTANCIAS DE CLASE
    $cam=new Camioneta();

//IMPRIMIMOS
    $cam->color="rojo<br>";
    echo $cam->color;
    echo $cam->acelerar();

  

    



?>