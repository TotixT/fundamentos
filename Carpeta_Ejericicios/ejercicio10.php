<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <form action="ejercicio10.php" method="post">
        <label for="numero">Ingrese un Numero:</label>
        <input type="number" name="numero">
        <input type="submit" name="ejecutar" value="Agregar Numero"><br><br>
        <label > Mostrar resultados de numeros enviados</label>
		<input type="submit" name="ejecutar" value="Mostrar resultados"><br><br>
    </form>
    <?php
        session_start();
        if (isset($_POST["ejecutar"])) {
            if ($_POST["ejecutar"] == "Agregar número") {
                $numero = $_POST["numero"];
                if ($numero != 0) { 
                    //$_session variable que se usa para almacenar datos en el web server(config, preferencias, detalles de login) 
                    array_push($_SESSION["numeros"], $numero); 
                }
            } else if ($_POST["ejecutar"] == "Mostrar resultados") {
                $numeros = $_SESSION["numeros"]; //$_SESSION["numeros"] = [10, 20]
                $suma = array_sum($numeros);
                $promedio = count($numeros) > 0 ? $suma / count($numeros) : 0; //if (?) y else (:)
                $mayor = max($numeros);
                $menor = min($numeros);
                $contador = count($numeros);

                echo "<h2>Resultados:</h2>";
                echo "<p>La sumatoria de los valores es: {$suma}</p>";
                echo "<p>El valor del promedio es: {$promedio}</p>";
                echo "<p>Se ingresaron {$contador} valores</p>";
                echo "<p>El mayor valor es: {$mayor}</p>";
                echo "<p>El menor valor es: {$menor}</p>";
            }
        } else {
            $_SESSION["numeros"] = []; 
        }
    ?>
</body>
</html>