<?php

class Pessoa {

    public $nome;
    public $idade;

    function andar($km) {
        echo "Andei por $km metros <br>";
    }

}

$victor = new Pessoa;

$victor->nome = "Victor";
$victor->idade = 28;

echo "Olá, meu nome é $victor->nome, eu tenho $victor->idade anos, e" . $victor->andar(25) ."<br>";
