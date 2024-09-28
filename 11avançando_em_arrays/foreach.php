<?php

$arr = [
    'nome' => 'Victor',
    'idade' => 28,
    'profissão' => 'Dev'
];

$arr2 = [
    'nome' => 'Matheus',
    'idade' => 29,
    'profissão' => 'Engenheiro'
];

foreach($arr as $carac => $value) {

    echo "$carac: $value <br>";

}

echo "<br>";

foreach($arr2 as $carac => $value) {

    echo "$carac: $value <br>";

}