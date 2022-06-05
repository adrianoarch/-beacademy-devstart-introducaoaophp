<?php

$bandas = [
    'Iron Maiden',
    'Metallica',
    'AC/DC',
    'Pink Floyd',
    'The Beatles',
    'Led Zeppelin',
];

$bandas[] = 'The Rolling Stones';

$bandas[100] = 'The Who';

$bandas[9] = 'Queen';


echo "<ul>";
//     for ($i = 0; $i < count($bandas); $i++) {
//         echo "<li>{$bandas[$i]}</li>";
//     }

// echo "<br>";

// echo count($bandas); // Testando o resultado da função count()

foreach ($bandas as $cadabanda) {
    echo "<li>{$cadabanda}</li>";
}

echo "</ul>";
