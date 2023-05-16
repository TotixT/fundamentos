<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio3.php" method="post">
        <label>Determinacion del Voltaje</label> <br> <br>
        Resistencia <input type="number" name="resistencia" >
        Intensidad <input type="number" name="intensidad" >
        <input type="submit" value="enviar">
        <br>
    </form>
    <?php

    $resistencia = $_POST["resistencia"];
    $intensidad = $_POST["intensidad"];

    $voltaje = $resistencia * $intensidad ;

    echo "<br> El Voltaje Total usado fue de: $voltaje";
?>
</body>
</html>