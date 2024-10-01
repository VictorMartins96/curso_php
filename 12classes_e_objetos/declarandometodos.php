<?php

class Pessoa {

    function falar() {
        echo "Olá, eu sou um objeto <br>";
    }

    function somar($x , $y) {
        echo $x + $y;
        echo "<br>";
    }

}

$victor = new Pessoa;
$victor -> falar();
$victor -> falar();
$victor -> somar(4 , 5);

$joao = new Pessoa;

$joao -> falar();
$joao -> somar(2 , 4);
