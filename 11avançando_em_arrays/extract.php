<?php

$arr = [
    'cor' => 'vermelho',
    'forma' => 'retangular',
    'material' => 'aço'
];

extract($arr);

echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";

$nome = "Victor";

$pessoa = [
    'nome' => 'João',
    'idade' => 28
];

echo "$nome <br>";

extract($pessoa); //após o extract, o valor passa a ser no que foi extraido por essa função

echo "$nome <br>";
echo "$idade <br>";