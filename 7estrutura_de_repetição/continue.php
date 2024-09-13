<?php

$a = 0;

while($a < 30) {

    if($a == 5 || $a == 7 ) {
        //echo "Pulou a execução $a <br>";
        $a++;
        continue;
    }    
    
    echo "loop $a <br>";
    $a++;

}



?>