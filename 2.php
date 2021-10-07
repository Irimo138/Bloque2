<?php
$fila = 6;
$columna = 4;
?>
<table style="border: black solid 1px">
<?php 
    for ($i=0; $i < $fila; $i++) { 
        ?>
        <tr>
            <?php
        for ($j=0; $j < $columna; $j++) { 
            echo "<td style='border: black solid 1px'>X</td>";
        }
        ?>
        </tr>
        <?php
    }
?>
</table>