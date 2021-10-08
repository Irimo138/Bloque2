<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
    $expo = 3;
    $base = 2;
    
    function mostrar($base, $expo){
        $result = 1;
        for ($i=1; $i <= $expo; $i++) { 
           $result = $result * $base;
        }

        echo $result;
    }
    
    mostrar($base, $expo);
    ?>
</body>
</html>