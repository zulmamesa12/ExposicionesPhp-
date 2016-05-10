<DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>operadores para arrays</title>
</head>
<body>
<?php
$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; // Unión de $a y $b
echo "Unión de \$a y \$b: \n";
var_dump($c);

$c = $b + $a; // Unión de $b y $a
echo "Unión de \$b y \$a: \n";
var_dump($c);

$a += $b; // Unión de $a += $b es $a y $b
echo "Unión de \$a += \$b: \n";
var_dump($a);
?>
</body>
</html>