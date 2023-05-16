<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamentos</title>
</head>
<body>
    <?php 
        echo "<h1>titulo con html generado desde php</h1>";
        echo phpversion();
        echo phpinfo();

        /* 1. Variables */

        /* $variable = "hello world dude";
        echo $variable; */

        /* 2. Errores */
        /* 2.1 Parse error: syntax error */
        
        $variable = "Hello World Dude";
        echo $variable;

        /* 2.2 Warning */

        echo $variablejasjsa;

        /* 2.3 Fatal Error */

        asdsfsafsafa;
    ?>
</body>
</html>