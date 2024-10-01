<?php

class Cachorro {

    function latir() {
        echo "AuAu <br>";
    }

    function andar($t) {
        echo "Estou andando há $t minutos <br>";
    }

}

$pitbull = new Cachorro;
$viralata = new Cachorro;

$pitbull -> latir();
$viralata -> latir();

$pitbull -> andar(50);
$viralata -> andar(00);