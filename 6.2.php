<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
    
    class birthday{

        function __construct($name, $month){
        $this -> name = $name;
        $this -> month = $month;
        }

        function addbirthday($name, $month){
        $mes;
        $str = "enero febrero marzo abril mayo junio julio agosto septiembre octubre noviembre diciembre";
        $mes = explode(" ", $str);
            foreach ($mes as $key => $value) {
                echo $value;
                echo "<br>";
            }
        }
    }
    $usuario = new birthday('Unai','marzo');
    $usuario -> addbirthday($usuario->name, $usuario->month);
    
    
    ?>
</body>
</html>