<?php

    if(isset($_COOKIE['nome'])) {
        $nome = $_COOKIE['nome'];
    }
    //print_r($_COOKIE);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina</h1>
    <?php if($nome != ""): ?>
        <h2>Seja bem vindo, <?= $nome ?></h2>
    <?php endif; ?>    
</body>
</html>