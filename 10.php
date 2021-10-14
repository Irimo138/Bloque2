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
        class person {            

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
        $user1 = new person('Asis', 'caballero','72557824T');
       //$user1 ->mostrar();

        class user extends person {
            public function __construct($puntos,$dni,$nombre,$apellido) {
                parent::__construct($dni,$nombre,$apellido);
                $this->puntos = $puntos;
            }
         
            public function getPunto() {
                return $this->firstField;
            }
            public function setPuntos($x) {
                $this->puntos = $x;
            }

            function mostrar(){
                echo $this->name ." ". $this -> surname." ";
                echo " puntos: ".$this->puntos;

            }
        }
        $user2 = new user(50,'Soto', 'iriarte','72557824T');
        $user2 ->mostrar();
    
        
        
    ?>
</body>
</html>