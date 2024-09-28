<?php

$nome = "Victor";
$idade = 28;
$profissão = "Dev";

$pessoa = compact("nome" , "idade" , "profissão");

print_r($pessoa);