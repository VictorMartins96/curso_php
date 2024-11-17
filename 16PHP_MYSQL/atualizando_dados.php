<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";
$port = 3312;

$conn = new mysqli($hostname, $user, $pass, $db, $port);

//ASSUNTO DO DIA

$id = 10;
$nome = "Sofá";
$descricao = "Sofá seminovo";

$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

$stmt->bind_param("ssi",$nome,$descricao,$id);

$stmt->execute();

if($stmt->error) {
    echo "Erro: " . $stmt->error;
}