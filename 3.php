<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    $nums;
        for ($i=0; $i < 20; $i++) { 
            $nums[$i] = random_int(0,100);
            //echo $nums[$i];
        }
    sort($nums);
    for ($i=0; $i < 20; $i++) { 
        //$nums[$i] = random_int(0,100);
        if ($i == 0) {
            echo "<a style='color: blue'> $nums[$i] </a>"."</br>";
        }elseif ($i == 19) {
            echo "<a style='color: green'> $nums[$i] </a>"."</br>";
        }else{
        echo "<a> $nums[$i] </a>"."</br>";
        }
    }
    $suma = 0;
    for ($i=0; $i < sizeof($nums); $i++) { 
        $suma += $nums[$i];
    }
    echo "suma: ".$suma." media: ".$suma/20;
    ?>
</body>
</html>