<?php

class Carro {
    public $rodas = 4;
    private $vidro = "Sem pelicula"; //Por ser private, não pode ser modificado

    public function getVidro() {
        return $this->vidro; //através desse método, pode-se acessar a propriedade privada
    }
}

class Mecanico {  //mecanico: victor

    public function alterarRodas($carro) {
        $carro->rodas = 10;
    }

    public function colocarPelicula($carro , $pelicula) {
        $carro->vidro = $pelicula;
    }
}

$carro = new Carro;
echo $carro->rodas . "<br>"; 

$victor = new Mecanico;
$victor->alterarRodas($carro); //alterando valores a partir de outro método
echo $carro->rodas . "<br>";

//Não pode alterar, porque é privado
//$victor->colocarPelicula($carro , "G20");

//$carro->peliculaDeFabrica("G10");

echo $carro->getVidro() . "<br>";

