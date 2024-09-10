<?php

if(5 < 10) {
    echo "Deu certo! Entrou no if <br>"; // estrutura verdadeira
}

if(2 > 5) {
    echo "Não vai entrar no if <br>"; // estrutura falsa
}

// usando operadores lógicos

if( 5 > 3 && 10 !== 100) {
    echo "Deu certo mais uma vez <br>";
}

//variáveis

$a = 10;
$b = 16;

$c = "Deu certo, é verdadeiro <br>";

if($a !== $b) {
    echo $c;
}



?>