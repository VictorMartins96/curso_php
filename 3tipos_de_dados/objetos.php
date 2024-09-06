<?php
//Métodos = ações | Propriedades = características 

class Pessoa { //criação de classe

    function falar() {
        echo "olá pessoal"; //método
    }
}

$victor = new Pessoa(); //adicionou uma pessoa a classe Pessoa

$victor->nome = "Victor"; // adicionou uma propriedade á pessoa

echo $victor->nome;
echo "<br>";

echo $victor->falar()

?>