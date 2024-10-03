<?php

class Humano {

    public $idade = 28;

    public function andar() {
        echo "Estou andando <hr>";
    }

    private function gritar() {
        echo "ESTOU GRITANDO <br>";
    }

    public function acessaGritar() {
        return $this->gritar();
    }

    protected function falarBaixinho() {
        echo "estou falando baixo <br>";
    }

    public function acessaFalarBaixinho() {
        return $this->falarBaixinho();
    }

}

class Programador extends Humano {

    public function acessaFalarBaixinhoProgramador() {
        return $this->falarBaixinho();
    }

}

$victor = new Humano;
$victorprogramador = new Programador;

echo $victor->idade . "<br>";
$victor->andar();
$victor->acessaGritar();
$victor->acessaFalarBaixinho();

echo $victorprogramador->idade . "<br>";
$victorprogramador->andar();
$victorprogramador->acessaGritar();
$victorprogramador->acessaFalarBaixinhoProgramador();






