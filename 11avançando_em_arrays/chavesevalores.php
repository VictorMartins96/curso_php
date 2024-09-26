<?php

$arr = [
    "carro" => "BMW" ,
    "tetosolar" => true , 
    "motor" => 2.4 , 
    "cambio" => "manual"
];

$chaves = array_keys($arr);

print_r($chaves);
echo "<br>";

$valores = array_values($arr);

print_r($valores);
echo "<br>";