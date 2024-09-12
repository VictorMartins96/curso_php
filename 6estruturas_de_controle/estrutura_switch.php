<?php

// $x = 80;

// switch($x) {
//     case 0:
//         echo "X é igual a 0 <br>";
//         break;
//     case 1:
//         echo "X é igual a 1 <br>";
//         break;
//     default: 
//         echo "o X não é nenhum destes valores <br>";
// }

function calcularDesconto($produto , $categoria) {

    $desconto = 0;

    switch($categoria) {
        case 'eletrônicos':            
            $produto - $desconto;
            break;
        case 'vestuário':
            $desconto = 20;
            $produto - $desconto;
            break;
        case 'alimentos':
            $desconto = 5;
            $produto - $desconto;
            break;
        case 'Outras categorias':
            $desconto = 0;
            $produto - $desconto;
            break;
        default:
            echo "Categoria desconhecida, não há descontos";
    }
}

calcularDesconto( 100 , 'alimentos');




?>