<?php

class Car {

    public $rodas = 4;
    public $aro= 20;   //propriedades
    public $cor= "Preto";

    function ligar() {   //métodos
        echo "Vrummm <br>";
    }

}

$ferrari = new Car;

echo $ferrari->rodas . "<br>";
echo $ferrari->aro . "<br>";

$ferrari->cor = "Verde";

echo $ferrari->cor . "<br>";

$ferrari->ligar();