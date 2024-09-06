<?php

$x = 30;
$y =& $x;

echo $y;
echo "<hr>";
echo $x;
echo "<hr>";

echo "Atribuição após a mudança";

$y = 20;

echo "<hr>";
echo $y;
echo "<hr>";
echo $x;
echo "<hr>";

$nome = 'Victor';

$nome1 =& $nome;

echo $nome1; 


?>