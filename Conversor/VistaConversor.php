<!DOCTYPE html>
<html>
<head>
    <title>Conversor</title>
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
    <form name="factorial" type="multipart/form-data" method="GET" action="ControladorConversor.php" id="dentro">
        <h1>CONVERSOR</h1>
        <label>Convertir de </label>
        <input id="num" type="text" name="num" placeholder="Coloca un número" required class="llena">
        <label>°</label>
        <br><br>
        <input type="radio" name="de" value="Celsius" required>
        <label for="male">Celsius</label>
        <input type="radio" name="de" value="Fahrenheit" required>
        <label for="male">Fahrenheit</label>
        <input type="radio" name="de" value="Kelvin" required>
        <label for="male">Kelvin</label>
        <br><br>
        <label>a grados</label>
        <br><br>
        <input type="radio" name="a" value="Celsius" required>
        <label for="male">Celsius</label>
        <input type="radio" name="a" value="Fahrenheit" required>
        <label for="male">Fahrenheit</label>
        <input type="radio" name="a" value="Kelvin" required>
        <label for="male">Kelvin</label>
        <br><br>
        <input type="submit" name="calcular" value="CONVERTIR" class="boton">
        <br><br>

        <?php
        if (isset($_GET['num'])){
            echo 'RESULTADO<br><br>'.$imp.'° '.$de.' es igual a '.$res.'° '.$a.'.';
        }
        ?>
    </form>
    
</body>
</html>