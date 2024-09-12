<?php


//A definição do contador
$x = 0;

// Inicio / definição da estrutura
while($x <= 10) {

    //corpo do loop
    echo $x . "<br>";

    //incremento do contador
    $x = $x + 1;
    //$x++;

}

echo "Continuando código <br>";

$y = 0;

while($y <= 10) {

    echo $y . "<br>";

    $y += 2;

}

echo "Continuando código <br>";

$z = 0;

while($z <= 100) {

    echo $z . "<br>";

    $z += 5;

}

echo "Continuando código <br>";

$a = 10;

while($a > 0) {

    if($a % 2 != 0) {
        echo $a . "<br>";
    }

    $a--;

}


?>