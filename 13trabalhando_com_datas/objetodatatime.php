<?php

$data = new DateTime();

//Data Atual
echo $data->format('d/m/y') . "<br>";

echo $data->format('D - M - Y') . "<br>";

echo $data->format('l - F - Y') . "<br>";

// + 5 dias

$data->modify('+5 days');

echo $data->format('l - F - Y') . "<br>";