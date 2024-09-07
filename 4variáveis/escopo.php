<?php
//ESCOPO GLOBAL
// $teste = "victor"; 

// echo "$teste global 1 <br>";

// if(5 > 2) {
//     $teste = "carla";
//     echo "$teste if 1 <br>";
// }

// echo "$teste global 2 <br>";
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//ESCOPO LOCAL

// $x = 10;

// echo "$x global <br>";

// function teste() {
//     $x = 5;
//     echo "$x local <br>";
// }

// teste();

// echo "$x global <br>";

// teste();

// function testando() {
//     $x = 12; 
//     echo "$x local 2 <br>";
// }

// $x = 99; 

// echo "$x global <br>";

// teste();
// testando();
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//ESCOPO STATIC

// function teste() {
//     static $num = 5;
//     $num++;
//     echo $num;
//     echo "<br>";
// }

// teste();
// teste();

// $num = 8;
// echo $num;

//ESCOPO DOS PARAMETROS

function soma($a , $b) {
    return $a + $b;
}

echo soma(5 , 5);

?>