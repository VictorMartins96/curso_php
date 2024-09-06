<?php

//Deve inserir ponto . para tornar float
$a = 1.12;

echo $a;
echo "<br>";

echo 1.59 + 9.54;


//CHECANDO SE O VALOR É FLOAT

if(is_float(1.25)) {
    echo "É float <br>";
}

if(is_float("N")) {
    echo "É float <br>";
}

$a = 15.26; 

if(is_float($a)) {
    echo "É float!";
}


?>