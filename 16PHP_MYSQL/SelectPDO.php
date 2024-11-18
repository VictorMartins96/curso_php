<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";
$port = 3312;

$conn = new PDO("mysql:host=$hostname;dbname=$db;port=$port", $user, $pass);

$id = 5;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id = :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($data);

$item = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($item);