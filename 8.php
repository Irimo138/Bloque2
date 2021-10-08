<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
        if (!$fp = fopen("miarchio.txt", "r")){
            throw new Exception('No existe dicho archivo');
        }else{
            echo "El archivo existe";
        }
    
    ?>
</body>
</html>