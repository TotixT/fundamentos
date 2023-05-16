<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>
<body>
    <form action="ejercicio1.php" method="post">
        <label>Notas del Estudiante</label> <br>
        Nota 1 <input type="number" name="nota1" >
        Nota 2 <input type="number" name="nota2" >
        Nota 3 <input type="number" name="nota3" >
        <input type="submit" value="enviar">
        <br>
    </form>
    <?php

    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    $total = $nota1 + $nota2 + $nota3;
    $promedio = $total / 3;
    if($promedio<=3.9){
        echo "<br> Mejor dediquese a vender Vive 100 en la 15° <br>";
    } else {
        echo "<br> Bien menor, lo vamos a becar y suicidar con 15 balazos en la espalda <br>";
    }
    echo "<br> Su Promedio fue de: $promedio";
?>

</body>
</html>

