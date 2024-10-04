<?php

class Humano {

    public $a = 1;
    public $b = 12;

    public function teste() {
        echo "Teste";
    }
}

class Professor { 
    
    public $c = 5;
    public $d = 6;

}

$victor = new Humano;
$victorprof = new Professor;

if($victor instanceof Humano) {
    echo "Victor é um humano";
} else {
    echo "Victor not a human";
}

echo "<br>";

if($victorprof instanceof Humano) {
    echo "Victor é um humano";
} else {
    echo "Victor not a human";
}