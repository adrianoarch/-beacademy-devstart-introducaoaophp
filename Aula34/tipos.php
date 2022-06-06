<?php

declare(strict_types=1);

function welcome(string $nome) : string 
{
    echo "Bem vindo ao sistema {$nome}!";
}

function soma(float $a, float $b) : float
 {
   return $a + $b;
}

echo soma(5.67, 100);

echo PHP_EOL . "----------------" . PHP_EOL;

echo welcome("João");