<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";
$port = 3312;

$conn = new PDO("mysql:host=$hostname;dbname=$db;port=$port", $user, $pass);

$stmt = $conn->prepare("DELETE FROM itens WHERE itens . id = :id");

$id2 = 14;

$stmt->bindParam(":id", $id2);

$stmt->execute();

