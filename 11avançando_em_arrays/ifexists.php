<?php

$pessoa = [
    "nome" => "Victor",
    "idade" => 28
];

echo array_key_exists("profissao" , $pessoa) ? "A chave existe!" : "A chave não existe!";
echo "<br>";

echo array_key_exists("nome" , $pessoa) ? "A chave existe!" : "A chave não existe!";

echo "<br>";

echo isset($pessoa["nome"]) ? "A chave existe!" : "A chave não existe!";