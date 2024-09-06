<?php

if(is_int(155)) {
    echo "É um inteiro <br>";
};

if(is_int("nãoéumint")) {
    echo "É um inteiro";
};

$a = 15;

if(is_int($a)) {
    echo "É um inteiro <br>";
};


?>