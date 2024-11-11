<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";
$port = 3312;

$conn = new mysqli($hostname, $user, $pass, $db, $port);


$nome = "Suporte para microfone";
$descricao = "Suporte novo de microfone direto da china";


$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?,?)");


//RESGATE DOS PARAMETROS
$stmt->bind_param("ss", $nome, $descricao); // s = string / i = integer / d = double

$stmt->execute();



?>