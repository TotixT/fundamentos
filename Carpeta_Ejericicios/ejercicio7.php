<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio7.php" method="post">
        <label>Nombres y Edades</label> <br> <br>
        Nombre  <input type="text" name="nombre" >
        Precio <input type="number" name="precio" >
        Cantidad <input type="number" name="cantidad" >
        <br> <br>
        <input type="submit" value="Enviar">
        <br>
    </form>
    <?php 
    
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];
    $total = $precio * $cantidad;

    echo "<br> El Articulo de Nombre $nombre, Que tiene un valor de $precio Pesos, Se ha llevado una de $cantidad Unidades, Por lo que tiene que pagar $$total Pesos.";


    ?>
</body>
</html>