<?php

if (5 > 2) {
    echo "entrou no if";
} else {
    echo "entrou no else";
}
echo "<hr>";

if("teste" === 5) {
    echo "entrou no if";
} else {
    echo "entrou no else <hr>";
}

// variaveis 

$a = 4;
$b = 5;

$msg = "entrou no else <hr>";

if($a > $b) {
    
} else {
    echo $msg;
}

// exercicio

$idade1 = 16;
$idade2 = 18;
$idade3 = 20;
$maioridade = 18;

$msg = "Você é maior de idade! <hr>";
$msg2 = "Você é menor de idade! <hr>";
 
if($idade1 >= $maioridade) {
    echo $msg;
} else {
    echo $msg2;
}



?>