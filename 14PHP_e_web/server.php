<?php

print_r($_SERVER);

echo "<hr>";

echo $_SERVER['HTTP_SEC_CH_UA'];

echo "<hr>";

if($_SERVER['SERVER_NAME'] == 'localhost') {

    echo "Está acessando o localhost";

}