<html>
    <head>
        <title>Ejercicio 5</title>
    </head>
    <body>
        <?php
        
                $meses= array(
                    "Enero"=>"31",
                    "Febrero"=>"28",
                    "Marzo"=>"31",
                    "Abril"=>"30",
                    "Mayo"=>"31",
                    "Junio"=>"30",
                    "Julio"=>"31",
                    "Agosto"=>"31",
                    "Septiembre"=>"30",
                    "Octubre"=>"31",
                    "Noviembre"=>"30",
                    "Diciembre"=>"31",
                );
            foreach ($meses as $key => $value) {
                echo $key . " - ". $value;
                echo "<br>";
            }
        ?>
    </body>
</html>