<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";
$port = 3312;

$conn = new mysqli($hostname, $user, $pass, $db, $port);

$q = 'SELECT * FROM itens';

$result = $conn->query($q);

$conn->close();

//UM RESULTADO
$item = $result->fetch_assoc();

//TODOS OS RESULTADOS
$itens = $result->fetch_all();

print_r($itens);

?>