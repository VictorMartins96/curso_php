<?php

$num1 = 20; $num2 = 40; $num3 = 60; 
$str1 = "Victor"; $str2 = "Martins"; $str3 = "Moreira";

if(is_numeric($num2)) {
    
    $res = $num2 * 2;
    echo "Este dado é um numero, e foi multiplicado por 2 , o resultado é $res <hr>";

    if($res > 100) {
        echo "Este numero é maior que 100 <br>";
    } else {
        echo "Este numero é menor que 100 <br>";
    }
}




?>