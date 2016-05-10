<DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>operadores de tipo</title>
</head>
<body>
<?php
class MyClass
{
}

class NotMyClass
{
}
$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof NotMyClass);
?>
</body>
</html>