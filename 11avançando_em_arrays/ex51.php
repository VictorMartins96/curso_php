<?php

$arr = [
    'Player1' => 155,
    'Player2' => 266,
    'Player3' => 65,
    'Player4' => 845,
    'Player5' => 332,
    'Player6' => 13
];

arsort($arr); 

?>

<h1>Ranking</h1>

<ol>
    <?php foreach($arr as $player => $value): ?>

    <li><?php echo "$player: $value pontos"; ?></li>
    
    <?php endforeach; ?>

</ol>