<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

    <?php

        $str = "manzana pera limon sandia melon";
        $frutas= explode(" ", $str);
        $ArrayAsoci=array();

        for ($i=0; $i < sizeOf($frutas) ; $i++) { 
            $ArrayAsoci[$frutas[$i]]=strlen($frutas[$i]);
        }

        $keys=array_keys($ArrayAsoci);
        for ($i=0; $i < sizeOf($frutas) ; $i++) { 

            echo "<br>". $keys[$i] . " => " . $ArrayAsoci[$keys[$i]];
        }
    ?>


</body>

</html>