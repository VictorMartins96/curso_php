<?php

//CONEXÃO COM DB

$hostname = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";
$port = 3312;

$conn = new mysqli($hostname, $user, $pass, $db, $port);

// ATRIBUINDO A QUERY EM UMA VARIAVEL
$sql = "SELECT * FROM itens";

//EXECUTANDO A QUERY EM UM OBJETO
$result = $conn->query($sql);

//PRINTANDO NA TELA A QUERY
print_r($result);

//ENCERRANDO A CONEXÃO
$conn->close();

?>