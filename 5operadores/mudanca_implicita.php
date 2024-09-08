<?php

echo 5 / 2; //de int para float
echo "<br>";

if(is_float(5 / 2)) {
    echo "É float <br>";
}

if(is_string(2 . 5)) {
    echo "É uma string <br>";
}

$nome = "Victor";
$undername = "Martins";

if(is_string($nome . $undername)){
    echo "É meu nome inteiro <br>";
}

$nomeCompleto = $nome . " " . $undername;

echo $nomeCompleto;
echo "<br>";


?>