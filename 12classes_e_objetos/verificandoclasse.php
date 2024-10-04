<?php

class Humano {
    public $idade;
    public $nome;
    public $profissao;

    public function andar() {}

    public function falar() {}


}

echo class_exists("Humano") ? "A classe existe" : "A classe não existe";

echo "<br>";

echo class_exists("Cachorro") ? "A classe existe" : "A classe não existe";

echo "<br>";

print_r(get_class_vars("Humano"));

echo "<br>";

print_r(get_class_methods("Humano"));



