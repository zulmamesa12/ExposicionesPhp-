<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
var_dump(0 == "a"); // 0 == 0 -> true
var_dump("1" == "01"); // 1 == 1 -> true
var_dump("10" == "1e1"); // 10 == 10 -> true
var_dump(100 == "1e2"); // 100 == 100 -> true

switch ("a") {
case 0:
    echo "0";
    break;
case "a": // nunca alcanzado debido a que "a" ya ha coincidido con 0
    echo "a";
    break;
}
?>
</body>
</html>