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
        class user {

            function __construct($name, $surname, $dni)
            {
                $this-> name = $name;
                $this-> surname = $surname;
                $this-> dni = $dni;
            }

            function mostrar($name, $surname){
                $nom = $this -> name;
                $sur = $this -> surname;
                $str = $nom ." ". $sur;
                return $str;
            }
            
        }
        $user1 = new user('Asis', 'caballero','72557824T');
        mostrar($user1 -> name, $user1 -> surname);
        
        
    ?>
</body>
</html>