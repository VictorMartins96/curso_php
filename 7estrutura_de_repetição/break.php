<?php

// $x = 0;

// while ($x <= 10) {

//     echo $x . "<br>";

//     if($x == 5) {
//         echo "Terminando o loop <br>";
//         break;
//     }

//     $x++;

// }

//exercicios

$x = 4;

while($x < 30) {

    echo "Contando $x <br>";
    
    if($x === 24) {    
        echo "Pausa no loop <br>";
        break;    
    }
    
    $x += 2;

}



?>