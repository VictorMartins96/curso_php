<?php

$arr = [2, 4, 6, 8, 10, 12, 14, 16];

$slice = array_slice($arr , 1 , 3);

print_r($slice);
echo "<br>";

$slice1 = array_slice($arr , 4 , 8);


print_r($slice1);
echo "<br>";

$slice2 = array_slice($arr , 4);


print_r($slice2);
echo "<br>";

$slice3 = array_slice($arr , 4 , -2);


print_r($slice3);
echo "<br>";