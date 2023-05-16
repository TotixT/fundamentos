<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio4.php" method="post">
        <label>Nombres y Edades</label> <br> <br>
        Nombre 1 <input type="text" name="nombre" >
        Edad 1 <input type="number" name="edad" >
        <br> <br>
        Nombre 2 <input type="text" name="nombre2" >
        Edad 2 <input type="number" name="edad2" >
        <br> <br>
        Nombre 3 <input type="text" name="nombre3" >
        Edad 3 <input type="number" name="edad3" > <br> <br>
        <input type="submit" value="Enviar">
        <br>
    </form>
    <?php
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $nombre2 = $_POST["nombre2"];
        $edad2 = $_POST["edad2"];
        $nombre3 = $_POST["nombre3"];
        $edad3 = $_POST["edad3"];
        $mayor = 0;
        $personaMayor = "";
        if ($edad > $mayor) {
            $mayor = $edad;
            $personaMayor = $nombre;
        }  
    
        if($edad2 > $mayor) {
            $mayor = $edad2;
            $personaMayor = $nombre2;
        }  
        
        if ($edad3 > $mayor) {
            $mayor = $edad3;
            $personaMayor = $nombre3;
        }
        echo "$mayor";
        echo "$personaMayor";
    ?>
</body>
</html>