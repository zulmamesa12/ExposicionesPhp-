<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function foo()
{
  function bar()
  {
    echo "No existo hasta que se llame a foo().\n";
  }
}

/* No podemos llamar aún a bar()
   ya que no existe. */

foo();

/* Ahora podemos llamar a bar(),
   el procesamiento de foo()
   la ha hecho accesible. */

bar();

?>
</body>
</html>