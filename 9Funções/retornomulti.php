<?php

function alteraDados($nome , $idade) {

    $nome = "Sr. $nome";
    $idade = "$idade anos";

    return [$nome , $idade];
}

$retorno = alteraDados("Victor" , 28);

print_r($retorno);

echo "<br>";

echo "Olá $retorno[0], você tem $retorno[1]";






?>