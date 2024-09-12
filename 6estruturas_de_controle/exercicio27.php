<?php

function compararNumeros ($n1 , $n2) {
    if($n1 > $n2) {
        echo "O primeiro número é maior <br>";
    } else if ($n1 < $n2) {
        echo "O segundo número é maior <br>";
    } else {
        echo "Os números são iguais <br>";
    }
}

$res = compararNumeros(15 , 25);

echo $res;



?>