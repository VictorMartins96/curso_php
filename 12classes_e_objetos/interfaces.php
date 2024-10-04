<?php

interface Caracteristicas {

    const nome = "Victor";
    public function falar();

}

class Humano implements Caracteristicas {

    public $idade = 19;
    
    public function falar() {
        echo "Fala";
    }

    public function dizerNome() {
        echo "Meu nome é:" . self::nome . "<br>";
    }

}

$victor = new Humano;

$victor->falar();
$victor->dizerNome();