<?php

$arr = [
    'joão' => 28,
    'lucas' => 15,
    'maria' => 18,
    'marcia' => 55,
    'fernando' => 16,
    'pedro' => 40
];

asort($arr);
print_r($arr); // crescente
echo "<br>";

$arrK = [
    'joão' => 28,
    'lucas' => 15,
    'maria' => 18,
    'marcia' => 55,
    'fernando' => 16,
    'pedro' => 40
];

ksort($arrK);
print_r($arrK); // crescente
echo "<br>";

$arr2 = [
    'joão' => 18,
    'lucas' => 85,
    'maria' => 68,
    'marcia' => 25,
    'fernando' => 61,
    'pedro' => 44
];

arsort($arr2);
print_r($arr2); // decrescente
echo "<br>";

$arrK2 = [
    'joão' => 18,
    'lucas' => 85,
    'maria' => 68,
    'marcia' => 25,
    'fernando' => 61,
    'pedro' => 44
];

krsort($arrK2);
print_r($arrK2); // decrescente
echo "<br>";