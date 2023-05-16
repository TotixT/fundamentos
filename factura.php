<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
</head>
<body>
    <form action="factura.php" method="post">
        <select name="cryptos">
            <option value="">Seleccione la Crypto</option>
            <option value="bit">Bitcoin</option>
            <option value="dog">DogeCoin</option>
            <option value="xpr">XPR</option>
            <option value="sol">SOL</option>
        </select>

        <label>Cantidad</label>
        <input type="number" name="cantidad">
        <input type="submit" value="enviar">
    </form>
    
    <?php 
        $bitcoin = 28191;
        $dogecoin = 3;
        $xprcoin = 100;
        $solcoin = 200;

        $cripto = $_POST["cryptos"];
        $cantidad = $_POST["cantidad"];

        if("bit" == $cripto){
            $total = $cantidad * $bitcoin;
            echo "<br> El Bitcoin esta a $bitcoin <br>";
            echo "<br> El total de Bitcoins comprados fue de $total";
        }

        /* if($_POST){
            
        } */
    
    ?>

</body>
</html>