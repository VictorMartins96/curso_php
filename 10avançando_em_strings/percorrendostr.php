<?php

$frase = "O Rato Roeu a Roupa do Rei de Roma";

$contador = 0;

for($i = 0 ; $i < strlen($frase) ; $i++) {


    if($frase[$i] === "a") {
        $contador++;
    }

    
}

echo "O numero de As na frase é de: $contador <br>";


?>
