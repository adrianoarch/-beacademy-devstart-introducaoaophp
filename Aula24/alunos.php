<?php

$aluno1 = [
    'nome' => 'João',
    'idade' => 20,
    'cidade' => 'São Paulo',
    'notas' => [5, 6, 7, 8]
];

$aluno2 = [
    'nome' => 'Maria',
    'idade' => 22,
    'cidade' => 'Rio de Janeiro',
    'notas' => [9, 10, 8, 7]
];

$aluno3 = [
    'nome' => 'José',
    'idade' => 23,
    'cidade' => 'Salvador',
    'notas' => [6, 7, 8, 9]
];

$aluno4 = [
    'nome' => 'Pedro',
    'idade' => 25,
    'cidade' => 'Belo Horizonte',
    'notas' => [10, 9, 10, 10]
];

$alunos = [$aluno1, $aluno2, $aluno3, $aluno4];

// var_dump($alunos);
?>

<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Cidade</th>
            <th>Notas</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($alunos as $aluno) : ?>
            <tr>
                <td><?= $aluno['nome'] ?></td>
                <td><?= $aluno['idade'] ?></td>
                <td><?= $aluno['cidade'] ?></td>
                <td>
                    <?php foreach ($aluno['notas'] as $nota) : ?>
                        <?= "{$nota} - " ?>
                    <?php endforeach; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

