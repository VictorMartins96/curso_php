<?php

function velMax($vel) {

    if(is_int($vel)) {
        echo "O carro atinge a velocidade máxima de $vel <br>";
    } else {
        echo "Por favor, digite um numero inteiro <br>";
    }

}

velMax(200);

//Não pode executar a chamada sem passar o parametro

$velocidade = 125;

velMax($velocidade);

//php ignora parametro desnecessario

velMax("teste");

function descreverAnimal($nome , $raca) {
    echo "O nome $nome é da raça $raca";
}

descreverAnimal('bob' , 'pitbull');





?>