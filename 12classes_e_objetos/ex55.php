<?php

class Carro {

    public $modelo = "Argos";
    public $ano = 2022;
    public $rodas = 4;
    public $velocidadeMaxima;

    function setVelocidadeMaxima($setvel) {
        $this->velocidadeMaxima = $setvel;
        echo "A velocidade é: $setvel";
    }

    function getVelocidadeMaxima($getvel) {
        echo "A velocidade máxima é: $getvel <br>";
    }

}

$fiat = new Carro;

$velocidadeMaxima = 90;

$fiat->getVelocidadeMaxima($velocidadeMaxima);
echo "<br>";

$fiat->setVelocidadeMaxima($velocidadeMaxima);
echo "<br>";





