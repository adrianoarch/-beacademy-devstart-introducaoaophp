<?php

$frutas = [
    'Banana',
    'Abacaxi',
    'Laranja',
];

//Adicionando nova fruta no array
$frutas[] = 'Morango';

$frutas[10] = 'Melancia';

$frutas[7] = 'Uva';

$frutas[] = 'Tangerina';

// var_dump($frutas);

?>

<!-- <ul>
    <li><?php echo $frutas[0]; ?></li>
    <li><?php echo $frutas[1]; ?></li>
    <li><?php echo $frutas[2]; ?></li>
    <li><?php echo $frutas[3]; ?></li>
    <li><?php echo $frutas[7]; ?></li>
    <li><?php echo $frutas[10]; ?></li>
    <li><?php echo $frutas[11]; ?></li>
</ul> -->

<ul>
    <li>
        <?php
            foreach ($frutas as $fruta) {
                echo "<li>{$fruta}</li>";
            }
        ?>
    </li>
</ul>