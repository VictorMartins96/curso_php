<?php

$nome = "Victor";
$idade = 28;
$profissao = "Dev"; 

$a = 10;
$b = 15;
$c = 20;
$d = 25;

if($nome == "Gustavo" || $idade > 18) {
    echo "Deu certo! <hr>";
}

if($profissao == "Dev" && $idade !== 16) {
    echo "Deu certo também! <hr>";
}

if($a > $b && $c < $d ) {
    echo "Deu certo mais uma vez! <hr>";
}

if($c !== $d || $b <= $a) {
    echo "Deu certo denovo! <hr>";
}








?>