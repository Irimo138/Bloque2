
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
    $max = 5;
    $min = -2;
    class cuadrado{
        function __construct($dimension){
            $this->dimension = $dimension;
        }
    }
        function cuadrado($lado){
            if ($lado < 0){
                throw new Exception ('Insertar un numero positivo');
            } else {
                return $lado * $lado;
            }
            
        }
        for ($i=0; $i < 4; $i++) { 
            $num = random_int(-2, 5);
            echo cuadrado($num);
            echo "<br>";
        }
        
    ?>
</body>
</html>
