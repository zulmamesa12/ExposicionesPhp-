<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Bienvenido</h1>

	<p>
		<?php
			if (isset($_COOKIE['MiCookie'])) {
		?>
			<b>Nombre: </b> <?php echo $_COOKIE['MiCookie']['nombre']; ?> </br>
			<b>Edad: </b> <?php echo $_COOKIE['MiCookie']['edad']; ?> </br>
		<?php
			}
		?>
	</p>

</body>
</html>