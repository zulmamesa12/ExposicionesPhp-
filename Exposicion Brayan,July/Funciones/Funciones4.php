<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function recursividad($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursividad($a + 1);
    }
}
?>
</body>
</html>