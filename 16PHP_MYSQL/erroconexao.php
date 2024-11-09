<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";
$port = 3312;

$conn = new mysqli($hostname, $user, $pass, $db, $port);

if($conn->connect_errno) {
    echo "Erro na conexão! <br>";
    echo "Erro:" . mysqli_connect_error();
}


?>