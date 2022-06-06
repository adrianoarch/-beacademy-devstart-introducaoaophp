<?php

declare(strict_types=1);

$notasCursoA = [ 10, 9, 9.5, 7];

$notasCursoB = [ 8, 9.3, 6.5, 8.5];

function mediaNotas(array $notas) : float 
{
    // $total = array_sum($notas);
    // $quantidade = count($notas);
    
    // // $soma = 0;
    // // foreach ($notas as $nota) 
    // // {
    // //     $soma += $nota;
    // // }
    return array_sum($notas) / count($notas);
}

echo mediaNotas($notasCursoA).PHP_EOL;

echo mediaNotas($notasCursoB).PHP_EOL;