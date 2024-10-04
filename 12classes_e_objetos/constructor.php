<?php


class Carro {

    public $portas;
    public $cor;
    public $marca;

    function __construct($portas , $cor , $marca) {
         
        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;

    }

}

$ferrari = new Carro(4 , "Vermelho" , "Ferrari");

echo "Este carro é da marca $ferrari->marca e a cor dele é $ferrari->cor <br>";

$bmw = new Carro(4 , "Preto" , "BMW");

echo "O carro da marca $bmw->marca tem $bmw->portas portas <br>";