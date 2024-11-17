<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";
$port = 3312;

$conn = new PDO("mysql:host=$hostname;dbname=$db;port=$port", $user, $pass);