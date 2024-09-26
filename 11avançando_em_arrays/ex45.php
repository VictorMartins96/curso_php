<?php

$arr = range(10 , 45, 6);

for($i = 0 ; $i < count($arr) ; $i++) {

    if($arr[$i] > 30) {
        echo "Valor: $arr[$i], valor muito alto!<br>";
    } else {
        echo $arr[$i] . "<br>";
    }

}
