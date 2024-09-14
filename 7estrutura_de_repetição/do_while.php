<?php

// $x = 0;

// do {

//     echo "Testando do while $x <br>";
//     $x++;

// } while($x <= 10)


$x = 100;

do {

    if($x == 55) {
        echo "Pulou a execução $x <br>";
        $x--;  //o decremento vem antes do continue
        continue;
    }
    
    echo "Testando do while decremento $x <br>";
    $x--;

} while ($x > 0)



?>