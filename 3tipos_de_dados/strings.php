<?php

echo "Testando textos de aspas duplas <br>";
echo 'Testando textos de aspas simples <br>';
echo "Ele disse: 'Olá!' <br>";
echo 'Ele disse: "Olá!" <br>';

$idade = 15;
echo "<br>";

echo "Ele tem $idade anos <br>"; //certo
echo 'Ele tem $idade anos <br>'; //errado


//CHECANDO STRING

$nome = "Victor";
$profissao = "Dev";
$idade = 28;

if(is_string($nome)) {
    echo "É uma string <br>";
}

if(is_string($idade)) {
    echo "É uma string <br>";
}

?>