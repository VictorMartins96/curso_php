<?php

$animal = "Cachorro";
$raca = "Pitbull";
$porte = "Grande";

$dog = compact("animal" , "raca" , "porte");
//print_r($dog);

foreach($dog as $caracter => $value) {

    echo "$caracter: $value <br>";

}