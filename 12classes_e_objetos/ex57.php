<?php

class Cachorro {

    public $orelhas;
    public $raça;
    public $cor;

    public function __construct($orelhas , $raça , $cor) {
        
        $this->orelhas = $orelhas;
        $this->raça = $raça;
        $this->cor = $cor;
    }

    public function exibirAnimal() {
        echo "Também tenho uma cachorrinha que é da raça $this->raça e ela também é da cor $this->cor <br>";
    }

}

$pitbull = new Cachorro(2 , "Pitbull" , "Marrom");
$bulldog = new Cachorro(2 , "Bulldog" , "Preto");

echo "Eu tenho dois cachorros, um é $pitbull->raça, e o outro é $bulldog->raça, meu pitbull é $pitbull->cor e o bulldog é $bulldog->cor, e os dois tem $pitbull->orelhas orelhas <br>";

$turca = new Cachorro(2 , "Poodle" , "Preta");

$turca->exibirAnimal();