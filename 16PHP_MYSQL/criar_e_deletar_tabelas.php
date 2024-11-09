<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";
$port = 3312;

$conn = new mysqli($hostname, $user, $pass, $db, $port);

//$q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

$q = "DROP TABLE teste";

$conn->query($q);

$conn->close();

?>