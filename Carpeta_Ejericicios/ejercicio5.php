<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="ejercicio5.php" method="post">
        <label>Nombres y Edades</label> <br> <br>

        Numero 1 <input type="number" name="numero" >
        <br> <br>
        Numero 2 <input type="number" name="numero2" >
        <br> <br>
        <input type="submit" value="Enviar">
        <br>
    </form>

    <?php 
    $Numero1 = $_POST["numero"];
    $Numero2 = $_POST["numero2"];
    if($Numero1 > $Numero2){
        $Suma = $Numero1 + $Numero2;
        $Resta = $Numero1 - $Numero2;
        echo "<br> La suma entre el Numero $Numero1 y el Numero $Numero2 es de $Suma <br>";
        echo "<br> La resta entre el Numero $Numero1 y el Numero $Numero2 es de $Resta <br>";
    }
    else if($Numero2 > $Numero1){
        $Multiplicacion = $Numero1 * $Numero2;
        $Division = $Numero1 / $Numero2;
        echo "<br> La Multiplicacion entre el Numero $Numero1 y el Numero $Numero2 es de $Multiplicacion <br>";
        echo "<br> La Division entre el Numero $Numero1 y el Numero $Numero2 es de $Division <br>";
    }

    ?>
</body>
</html>