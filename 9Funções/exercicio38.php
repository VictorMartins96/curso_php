<?php

$lista = ["Arroz" , "Feijão" , "Salada" , "Macarrão"];

function minhaLista($arr) {

    $str = "A lista contém os itens: ";

    for($i = 0 ; $i < count($arr) ; $i++) {

        $str .= "$arr[$i] ";
    }
    return $str;
}

echo minhaLista($lista);



?>