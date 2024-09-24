<?php

$arr = [
    "Arroz" => 10 , 
    "Feijão" => 8 ,
    "Açucar" => 5 ,  //array
    "Carne" => 18 ,
    "Salada" => 4
];

function custo($arr) { // função

    $arrItensCaros = []; //  variavel com objeto vazio, para armazenar os valores acima de dez

    foreach($arr as $item => $preco) {  // para cada preço do item do objeto

        if($preco > 10) {    //se o preço for maior que dez
        
            array_push($arrItensCaros , $item); // insira no objeto vazio os valores maiores que dez
        
        }
    }

    return $arrItensCaros; // então retorne os valores maiores que dez
}

$novoArr = custo($arr);

var_dump($novoArr);





?>