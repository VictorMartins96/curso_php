<?php

class Animal {

    public $nome;
    
    function escolherNome($nome) {
        $this->nome = $nome;
    }

    function latir() {
        echo "auau <br>";
    }

    function latirForte() {
        return strtoupper($this->latir());
    }


}

$frida = new Animal;

echo "O nome desse animal é $frida->nome <br>"; // aqui ainda não foi atribuido um valor como parametro para a função dentro da classe

$frida->escolherNome("Frida"); // atribuindo um valor

echo "O nome desse animal é $frida->nome <br>";

echo $frida->latir();
echo $frida->latirForte();