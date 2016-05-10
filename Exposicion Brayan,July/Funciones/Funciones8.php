<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	class C {}
	class D extends C {}

	// Esta no extiende a C.
	class E {}

	function f(C $c) {
	    echo get_class($c)."\n";
	}

	function e(C $c) {
	    echo get_class($c)."\n";
	}

	
	f(new C);
	
?>
</body>
</html>