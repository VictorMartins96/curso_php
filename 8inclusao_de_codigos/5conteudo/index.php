<?php

$nome = "Insira seu nome";
$sobrenome = "Insira seu sobrenome";
?>

<form action="">
    <div>
        <input type="text" value="<?= $nome; ?>">
    </div>
    <div>
        <input type="text" value="<?= $sobrenome; ?>">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>