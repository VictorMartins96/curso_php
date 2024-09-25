<?php


$frase = "Testando o string para array";

$fraseArray = explode(" ", $frase);

print_r($fraseArray);
echo "<br>";

$fraseArray2 = explode(" ", $frase);

print_r($fraseArray2);

echo "<br>";

$frase2 = "Carro, barco , avião , navio";

$frasearr = explode("," , $frase2);

for($i = 0 ; $i < count($frasearr) ; $i++) {
    echo "$frasearr[$i] <br>";
}