<?php

$texto = "<p> Testando </p> <div> html </div> <p>Testando</p><div> outra div </div>";

echo $texto . "<br>";

$salvar = strip_tags($texto);

echo $salvar;