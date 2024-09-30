<?php

$arr = [5 , 2 , 44 , 62 , 59 , 51 , 3];

function ordenarNumeros($arr) {
    asort($arr);
    print_r($arr);    
}

ordenarNumeros($arr);