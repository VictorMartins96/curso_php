<?php

trait Objeto {
    
    public function object() {
        echo "Este método é do trait objeto <br>";
    }
}

trait Testando {

    public $y = 15;

    public function Testando() {
        echo "Este método é da trait testando <br>";
    }

}



class Central {

    use Objeto;
    use Testando;

}

$x = new Central;

$x->object();

echo $x->y . "<br>";

$x->Testando();