<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio6.php" method="post">
        <label>Nombres y Edades</label> <br> <br>
        Nombre 1 <input type="text" name="nombre" >
        Sexo 1 <input type="text" name="sexo" >
        Nota Def 1 <input type="number" name="nota" >
        <br> <br>
        Nombre 2 <input type="text" name="nombre2" >
        Sexo 2 <input type="text" name="sexo2" >
        Nota Def 2 <input type="number" name="nota2" >
        <br> <br>
        Nombre 3 <input type="text" name="nombre3" >
        Sexo 3 <input type="text" name="sexo3" >
        Nota Def 3 <input type="number" name="nota3" > <br> <br>
        <input type="submit" value="Enviar">
        <br>
    </form>
    <?php
        $nombre = $_POST["nombre"];
        $nota = $_POST["nota"];
        $sexo = $_POST["sexo"];
        $nombre2 = $_POST["nombre2"];
        $nota2 = $_POST["nota2"];
        $sexo2 = $_POST["sexo2"];
        $nombre3 = $_POST["nombre3"];
        $nota3 = $_POST["nota3"];
        $sexo3 = $_POST["sexo3"];
        $notaMayor = 0;
        $notaMenor = 999;
        $estudianteMayor="";
        $estudianteMenor="";
        $hombres = 0;
        $mujeres = 0;
        $personaMayor = "";
        if ($nota > $notaMayor) {
            $notaMayor = $nota;
            $estudianteMayor = $nombre;
        }  
        if($nota2 > $notaMayor) {
            $notaMayor = $nota2;
            $estudianteMayor = $nombre2;
        }  
        if ($nota3 > $notaMayor) {
            $notaMayor = $nota3;
            $estudianteMayor = $nombre3;
        }

        if ($nota < $notaMenor) {
            $notaMenor = $nota;
            $estudianteMenor = $nombre;
        }  
        if($nota2 < $notaMenor) {
            $notaMenor = $nota2;
            $estudianteMenor = $nombre2;
        }  
        if ($nota3 < $notaMenor) {
            $notaMenor = $nota3;
            $estudianteMenor = $nombre3;
        }

        if ($sexo === 'M' || $sexo === 'm') {
            $hombres++;
        }  
        if($sexo2 === 'M' || $sexo2 === 'm') {
            $hombres++;
        }  
        if ($sexo3 === 'M' || $sexo3 === 'm') {
            $hombres++;
        }

        if ($sexo === 'F' || $sexo === 'f') {
            $mujeres++;
        }  
        if($sexo2 === 'F' || $sexo2 === 'f') {
            $mujeres++;
        }  
        if ($sexo3 === 'F' || $sexo3 === 'f') {
            $mujeres++;
        }

        echo "<br> La Persona $estudianteMayor tiene la Mayor Nota Definitiva con $notaMayor ";
        echo "<br> La Persona $estudianteMenor tiene la Menor Nota Definitiva con $notaMenor ";
        echo "<br> La Cantidad de Hombres es de: $hombres y la Cantidad de Mujeres es de: $mujeres";
    ?>
</body>
</html>