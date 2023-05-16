<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio2.php" method="post">
        <label>Digite un Numero y veremos si es Par o Impar </label> <br> <br>
        <input type="number" name="numero"> <br> <br>
        <input type="submit" value="enviar">
    </form>

    <?php

        $numero = $_POST["numero"];
        if($numero % 2 == 0 && $numero>10){
            echo "<br> El numero $numero es PAR y es MAYOR a 10";
        } else if ($numero % 2 == 0 && $numero<10){
            echo "<br> El numero $numero es PAR y es MENOR a 10";
        } elseif ($numero % 2 == 1 && $numero>10) {
            echo "<br> El numero $numero es IMPAR y es MAYOR a 10";
        } elseif ($numero % 2 == 1 && $numero<10) {
            echo "<br> El numero $numero es IMPAR y es MENOR a 10";
        } 
    ?>
</body>
</html>