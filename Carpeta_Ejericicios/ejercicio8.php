<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio8.php" method="post">
    <label>Cuadrado</label>
    Lado <input type="number" name="lado" >
    <br> <br>
    <label>Rectangulo</label>
    Base <input type="number" name="base" >
    Altura <input type="number" name="altura" >
    <br> <br>
    <input type="submit" value="Enviar">
    </form>

    <?php 
    
    $lado = $_POST["lado"];
    $base = $_POST["base"];
    $altura = $_POST["altura"];
    $cuadrado = $lado * 4;
    $rectangulo = $base * $altura;

    echo "<br> El Perimetro del Cuadrado es de $cuadrado, entendiendo que los lados son de $lado.";
    echo "<br> El Area de un rectangulo es de $rectangulo, entendiendo que la base es de $base y la altura es de $altura";


    ?>

</body>
</html>