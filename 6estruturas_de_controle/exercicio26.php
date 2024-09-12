<?php

$vel = 51;
$velMax = 50;

$msgMulta = "Você foi multado <br>";
$msgCuidado = "Você está no limite da velocidade, tome cuidado! <br>";
$msgOk = "Você está na velocidade correta, parabéns! <br>";


if($vel < $velMax) {

    echo $msgOk;
    echo "<br>";

} else if ($vel == $velMax) {

    echo $msgCuidado;
    echo "<br>";

} else {

    echo $msgMulta;

}





?>