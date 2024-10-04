<?php

class Humano {

    public $idade = 28;
    public $cpf = 442;
    public $endereço = "Las Palmas";

    public function falar() {
        echo "Olá, é um prazer lhe conhecer <br>";
    }

}

class Professor extends Humano {

    public $materia = "Geografia";
    public $salario = 2300;

    public function ensinar() {
        echo "Estou dando aula <br>";
    }

}

$victor = new Humano;
$profvictor = new Professor;

echo $profvictor->cpf . "<hr>";
echo $profvictor->endereço . "<hr>";

$profvictor->falar() . "<hr>";
$profvictor->ensinar() . "<hr>";