<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
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
	<form name="calculadora" type="multipart/form-data" method="GET" action="ControladorCalculadora.php" id="dentro">
		<h1>CALCULADORA</h1>
		<input id="num" type="text" name="num1" placeholder="Coloca un número" required class="llena">
		<input id="num" type="text" name="num2" placeholder="Coloca un número" required class="llena">
		<br><br>
		<input type="submit" name="sumas" value="+" class="bot">
		<input type="submit" name="restas" value="-" class="bot">
		<input type="submit" name="multiplicars" value="*" class="bot">
		<input type="submit" name="dividirs" value="/" class="bot">
		<br><br>

		<?php
		if (isset($_GET['num1'])&&isset($_GET['num2'])){
			echo 'RESULTADO<br><br>'.$num1.' '.$sig.' '.$num2.' = '.$res;
		}
		?>
		
	</form>
	
</body>
</html>
