<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9</title>
</head>
<body>
<form action="ejercicio9.php" method="post">
        <label>Nombre y Marca</label> <br> <br>
        Nombre 1 <input type="text" name="nombre" >
        Marca 1 <input type="text" name="marca" >
        <br> <br>
        Nombre 2 <input type="text" name="nombre2" >
        Marca 2 <input type="text" name="marca2" >
        <br> <br>
        Nombre 3 <input type="text" name="nombre3" >
        Marca 3 <input type="text" name="marca3" >
        <br> <br>

        <input type="submit" value="Enviar">
        <br>
    </form>
    <?php
        $nombre = $_POST["nombre"];
        $marca = $_POST["marca"];

        $nombre2 = $_POST["nombre2"];
        $marca2 = $_POST["marca2"];

        $nombre3 = $_POST["nombre3"];
        $marca3 = $_POST["marca3"];

        $Mayor = 0;
        $Par_Mayor="";

        if ($marca > $Mayor) {
            $Mayor = $marca;
            $Par_Mayor = $nombre;
        }  
        if ($marca2 > $Mayor) {
            $Mayor = $marca2;
            $Par_Mayor = $nombre2;
        }
        if ($marca3 > $Mayor) {
            $Mayor = $marca3;
            $Par_Mayor = $nombre3;
        } 

        if($Mayor>15.50){
            echo "<br> La Persona $Par_Mayor hizo la Marca $Mayor, que rompio el Record y se le entregara los 500M al que gano definitivamente.";
        } else {
            echo "<br> La Persona $Par_Mayor tiene la Mayor Marca con $Mayor";
        }

    ?>
</body>
</html>