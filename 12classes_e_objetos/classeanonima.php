<?php

$pessoa = new class() {

    public $nome = "Victor";

    public function dizerNome() {
        echo "Meu nome é $this->nome <br>";
    }

};

echo $pessoa->nome . "<br>";

$pessoa->dizerNome();