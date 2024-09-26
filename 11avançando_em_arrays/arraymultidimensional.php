<?php
//array dentro de array


$arr = [1 , 2 , 3 , [3.1 , 3.2] , 4 , 5];

print_r($arr);
echo "<br>";

echo $arr[3][0]; //acessando quarto array, primeiro elemento
echo "<br>";

echo count($arr[3]);