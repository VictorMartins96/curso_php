<?php

$array = [
    'Victor' => 28,
    'João' => 25,
    'Antonio' => 37,
    'Carla' => 24,
    'Marcia' => 55
];

?>

<table>
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($array as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
    <?php endforeach; ?>
</table>