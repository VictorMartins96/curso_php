<?php

function aoQuadrado($num) {

    $res = $num ** 2;

    return $res;

}

$x = aoQuadrado(5);

echo $x . "<br>";

$n1 = aoQuadrado($x);

echo $n1;


// function soma($n1 , $n2) {

//     return $n1 + $n2;

// }

// echo soma(4 , 4) . "<br>";

// $x = soma(2 , 4);

// echo $x . "<br>";

// $y = soma($x , 19);

// echo $y;

// function teste() {
//     echo "Testando";
// }

// $z = teste();


?>