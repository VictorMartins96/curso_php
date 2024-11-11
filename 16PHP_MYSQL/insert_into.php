<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";
$port = 3312;

$conn = new mysqli($hostname, $user, $pass, $db, $port);

$nome = "Xicara";
$descricao = "Xicara usada";

$q = "INSERT INTO itens (nome, descricao) VALUES ('$nome', '$descricao')"; // DADOS DEVEM SER INSERIDOS COMO STRINGS

$conn->query($q);

$conn->close();

?>