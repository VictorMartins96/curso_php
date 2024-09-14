<?php

// contador ; Condição ; incremento


// for($x = 100 ; $x > 0 ; $x--) {

//     if($x == 45 || $x == 65) {
//         echo "Pulando <br>";
//         $x--;
//         continue;
//     }

//     echo "Testando a estrutura for $x <br>";

// }

//EXERCICIO


// $arr = [ 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10 , 11 , 12 ,13 , 14 , 15 , 16 , 17 , 18 , 19 , 20];


// for($x = 0 ; $x < count($arr) ; $x++) {

//     if($arr[$x] % 2 == 0) {
//         echo "Numero: $arr[$x] <br>";
//     }

// }

$arr = [];

for($x = 0 ; $x <= 10 ; $x++) {
    
    array_push($arr , $x . "<br>");
    print_r($arr);

}





?>