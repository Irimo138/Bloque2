
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
        $dimension = 4 ;
        function cuadrado($lado){
            if ($lado < 0){
                // Lanzamos una excepción
                throw new Exception ('Insertar numero positivo');
            } else {
                return $lado * $lado;
            }
            
        }
        echo cuadrado($dimension);
    
    ?>
</body>
</html>
