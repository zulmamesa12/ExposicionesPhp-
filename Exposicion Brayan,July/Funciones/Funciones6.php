<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
		function hacer_café($tipos = array("capuchino"), $fabricanteCafé = NULL)
		{
		    $aparato = is_null($fabricanteCafé) ? "las manos" : $fabricanteCafé;
		    return "Hacer una taza de ".join(", ", $tipos)." con $aparato.\n";
		}
		echo hacer_café();
		echo hacer_café(array("lavazza"), "una tetera");
?>
</body>
</html>