<?php
$numeros = array(0, 1,2,3,4,5,6,7,8,9);
$factorial;
$factorial[0] = 0;
for ($i=1; $i < sizeof($numeros) ; $i++) { 
    $val = 1;
    for ($j=1; $j < $numeros[$i]; $j++) { 
        $val = $val * $j;
    }
    echo "<br>";
    echo $val;
}


?>