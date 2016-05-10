<!DOCTYPE html>
<html>
<head>
	<title>Operadores de ejecucion</title>
</head>
<body>
<?php
$output = `ls -al`;
echo "<pre>$output</pre>";
?>
</body>
</html>