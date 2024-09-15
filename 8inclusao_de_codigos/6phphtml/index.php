<?php

include_once "backend.php";

?>

<h1>Seja bem vindo ao nosso site</h1>
<p><?= $nome ?>, veja as nossas ofertas</p>

<h2>Confira nossos principais produtos</h2>
<ul>
<?php foreach($produtos as $produto): //iniciando o foreach dentro da tag php  ?>
 <li><?= $produto; //listando os produtos do php em torno de uma tag html ?></li>
<?php endforeach; // finalizando o foreach dentro da tag php?>
</ul>