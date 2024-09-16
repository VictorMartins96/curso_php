<?php

//local 

$a = 10;
$b = 15;
$c = 0;

function testeEscopo() {

    $a = 5;
    global $b; 
    static $c;
    $c++;
    $a++;
    $b++;
    echo "Escopo local de A: $a <hr>";
    echo "Escopo local de B: $b <hr>";
    echo "Escopo local de C: $c <hr>";
}

echo "Escopo GLOBAL de A: $a <hr>";
echo "Escopo GLOBAL de B: $b <hr>";
echo "Escopo GLOBAL de C: $c <hr>";

testeEscopo();

echo "Escopo GLOBAL de B 2: $b <hr>";



?>