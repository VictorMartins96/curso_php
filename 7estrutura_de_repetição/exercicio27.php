<?php

$valores = ["Victor" , 28 , true , 1.75 , "Martins" , 100 , false , 86.1 , true , "Moreira" , []]; 

$x = count($valores);
$y = 0;

while($y < $x) {
    
    if(is_string($valores[$y])) {
        echo $valores[$y] . "<br>";
    }

    $y++;

}





?>