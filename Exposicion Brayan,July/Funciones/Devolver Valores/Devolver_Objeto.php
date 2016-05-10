<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php

		class Multiplica{

    var $factor1=7;
    var $factor2=8;

    function curratelo(){
        echo $this->factor1*$this->factor2;
       }
	}

	   $objeto= new Multiplica;
	   $objeto->curratelo();

 	?>

</body>
</html>