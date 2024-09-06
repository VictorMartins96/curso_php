<?php
$pessoa = [
    'nome' => 'Victor' ,
    'idade' => '28' , 
    'profissao' => 'Developer',
    'peso' => '85.5',
    'altura' => '1.75',
    'nacionalidade' => 'Brasileiro',
    'cnh' => true,
    'cpf' => '44229014864' 
];

$idade = $pessoa['idade'];

if($idade >= 18) {
    echo "Você é maior de idade";
}





?>