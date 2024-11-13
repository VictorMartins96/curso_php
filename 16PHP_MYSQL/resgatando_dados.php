<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";
$port = 3312;

$conn = new mysqli($hostname, $user, $pass, $db, $port);

//ASSUNTO DO DIA

$id = 4;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

$stmt->bind_param("i", $id); //DEFININDO O PARAMETRO INDICANDO O TIPO DE DADO, E O VALOR 

$stmt->execute(); //EXECUTANDO A QUERY

$result = $stmt->get_result(); // PEGANDO O RESULTADO DA QUERY E LANÇANDO EM OUTRA VARIAVEL

$data = $result->fetch_all(); //SELECIONANDO TODOS OS DADOS DO ARRAY

print_r($data);