<?php

echo true;
echo false;
echo "<br>";

if(true) {
    echo "Pode entrar <br>";
}

if(5 > 2) {
    echo "Pode entrar <br>";
}
echo "<hr>";

$podeEntrar = true; 

if($podeEntrar) {
    echo "Seja bem vindo <br>";
}
echo "<hr>";

//CHECANDO SE É BOOLEANO

$a = true;

if(is_bool($a)) {
    echo "É booleano 1 <br>";
}
echo "<hr>";

if(is_bool(0)) {
    echo "É booleano 2 <br>";
}
echo "<hr>";

if(is_bool(0 == false)) {
    echo "É booleano 3 <br>";  // 0 , 0.0 , [] , null é considerado falso!
}




?>