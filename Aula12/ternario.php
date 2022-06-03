<?php

$idade = 19;

echo $idade >= 18 ? "Maior de idade" : "Menor de idade";

echo "<br>";

echo isset($nome) ? $nome : "Não existe";

echo "<br>";

echo $nome ?? 'Nome não existe'; //Muito utilizado hoje em dia. Spread Operator