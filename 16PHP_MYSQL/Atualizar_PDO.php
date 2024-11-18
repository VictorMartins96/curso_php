<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";
$port = 3312;

$conn = new PDO("mysql:host=$hostname;dbname=$db;port=$port", $user, $pass);

$id = 8;
$nome = "Abajur usado";
$descricao = "Abajur fabricado na china, vende-se usado";

$stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();