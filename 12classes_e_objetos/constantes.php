<?php

//Constantes: Sua caracteristica é que o valor que foi atribuido não pode ser alterado, e sua forma de invocar o valor, é através de :: ($variavel::VALOR)

class Humano {
    public const OLHOS = 2;
    public const BRAÇOS = 2;
    public const PERNAS = 3;

    function mostrarConstante() {

        echo self::PERNAS . "<br>";
    }

}

$victor = new Humano;

echo $victor::OLHOS . "<br>";

$victor->mostrarConstante();

