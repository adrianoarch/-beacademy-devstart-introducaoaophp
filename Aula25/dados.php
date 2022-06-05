<?php

//array associativo ou dicionário
$dados  = [
    [
        'nome' => 'João',
        'idade' => 20,
        'cidade' => 'São Paulo'
    ],
    [
        'nome' => 'Maria',
        'idade' => 22,
        'cidade' => 'Rio de Janeiro'
    ],
    [
        'nome' => 'José',
        'idade' => 23,
        'cidade' => 'Salvador'
    ],
    [
        'nome' => 'Pedro',
        'idade' => 25,
        'cidade' => 'Belo Horizonte'
    ]
    ];

    // var_dump($dados);

    echo "<ul>";
    foreach ($dados as $dado) {
        echo "<li>{$dado['nome']} - {$dado['idade']} - {$dado['cidade']}</li>";
    }
    echo "</ul>";
