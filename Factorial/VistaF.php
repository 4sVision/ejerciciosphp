<!DOCTYPE html>
<html>
<head>
	<title>Factorial</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
	<link rel="icon" type="image/png" href="../img/star.png" />
</head>
<body>
	<nav id="menu">
		<div><a href="../Factorial/VistaF.php">Factorial de un número</a></div>
		<div><a href="../Conversor/VistaConversor.php">Conversor de Temperaturas</a></div>
		<div><a href="../Calculadora/VistaCalculadora.php">Calculadora Básica</a></div>
		<div id="icon"><a href="../index.html"><img src="../img/star.png"></a></div>
	</nav>
	<form name="factorial" type="multipart/form-data" method="GET" action="ControladorF.php" id="dentro">
		<h1>FACTORIAL</h1>
		<label>Número:</label>
		<input id="num" type="text" name="num" placeholder="Coloca un número del 1 al 10" required min="1" max="10" class="llena">
		<br><br>
		<input type="submit" name="calcular" value="CALCULAR" class="boton">
		<br><br>

		<?php
		if (isset($_GET['num'])){
			echo 'El factorial de '.$imp.' es '.$res.'.';
		}
		?>
	</form>
	
</body>
</html>
