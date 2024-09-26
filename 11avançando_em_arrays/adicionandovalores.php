<?php
//Adicionando novos valores, ou alterando valores em um array

$arr = [];

print_r($arr);
echo "<br>";

$arr[0] = 10;

print_r($arr);
echo "<br>";

$arr[1] = 15;

print_r($arr);
echo "<br>";

$arr[5] = 101;

print_r($arr);
echo "<br>";

//modificando valores

$arr[1] += 50;

print_r($arr);
echo "<br>";

//array associativo

$arrAssoc = [];
print_r($arrAssoc);
echo "<br>";

$arrAssoc["Carro"] = "BMW";
print_r($arrAssoc);
echo "<br>";

$arrAssoc["Avião"] = "Gol";
print_r($arrAssoc);
echo "<br>";
