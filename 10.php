<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
<?php
        class Person {

            function __construct($name, $surname, $dni)
            {
                $this-> name = $name;
                $this-> surname = $surname;
                $this-> dni = $dni;
            }

            function mostrar(){
                echo $this->name ." ". $this -> surname;
            }
            
        }
        $user1 = new Person('Asis', 'caballero','72557824T');
        $user1 ->mostrar();
        
        
    ?>
</body>
</html>