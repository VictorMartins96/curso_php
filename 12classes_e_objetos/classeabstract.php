<?php

abstract class ClasseAbs {

    public static function testeAbs() {
        echo "Testando <br>";
    }

    abstract public function testando();

}

class Teste extends ClasseAbs {

    public function testando() {
        echo "Testando método abstrato <br>";
    }


}


ClasseAbs::testeAbs();

$t = new Teste;

$t->testando();



