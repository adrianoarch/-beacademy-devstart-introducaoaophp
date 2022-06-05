<?php

$bandas = [
    ['Iron Mainden, 5'],
    ['Metallica, 1'],
    ['AC/DC, 2, ruim'],
    ['Pink Floyd, 1'],
    ['The Beatles, 7'],
];

echo "<ul>";
foreach ($bandas as $banda) {
    echo "<li>{$banda[0]}</li>";
}
echo "</ul>";
