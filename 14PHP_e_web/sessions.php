<?php

session_start();

print_r($_SESSION);

$_SESSION['nome'] = "Victor";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá session</h1>
</body>
</html>