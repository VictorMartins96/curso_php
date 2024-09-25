<?php

$url = "https://www.google.com.br";

$arrayUrl = parse_url($url);

print_r($arrayUrl);
echo "<br>";

echo $arrayUrl["host"];
echo "<br>";

$url2 = "https://www.horadecodar.com.br/?busca=php";

$new2 = parse_url($url2);

print_r($new2);
echo "<br>";

echo $new2["query"];