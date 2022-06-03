<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Adriano de Oliveira"/>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="description" content="Tabela de receitas e despesas com html e php"/>   
    <title>Exercício Aula 12 - Tabela</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
<?php
    $lancamento1 = [
        'descricao' => 'Aluguel',
        'valor' => 'R$ 500,00',
        'tipo' => 'D'
    ];

    $lancamento2 = [
        'descricao' => 'Salário',
        'valor' => 'R$ 2000,00',
        'tipo' => 'R'
    ];

    $lancamento3 = [
        'descricao' => 'Alimentação',
        'valor' => 'R$ 300,00',
        'tipo' => 'D'
    ];

    $lancamento4 = [
        'descricao' => 'Lazer',
        'valor' => 'R$ 100,00',
        'tipo' => 'D'
    ];

    $lancamento5 = [
        'descricao' => 'Energia',
        'valor' => 'R$ 100,00',
        'tipo' => 'D'
    ];

    $lancamento6 = [
        'descricao' => 'Internet',
        'valor' => 'R$ 80,00',
        'tipo' => 'D'
    ];

    ?>
    <div class="container">
        <h1 class="text-center mb-3">Tabela de lançamentos do mês</h1>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Descrição</th>
                <th scope="col">Valor</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $lancamento1['descricao'] ?></td>
                <td><?php echo $lancamento1['valor'] ?></td>
                <td><?php echo $lancamento1['tipo'] ?></td>
            </tr>
            <tr>
                <td><?php echo $lancamento2['descricao'] ?></td>
                <td><?php echo $lancamento2['valor'] ?></td>
                <td><?php echo $lancamento2['tipo'] ?></td>
            </tr>
            <tr>
                <td><?php echo $lancamento3['descricao'] ?></td>
                <td><?php echo $lancamento3['valor'] ?></td>
                <td><?php echo $lancamento3['tipo'] ?></td>
            </tr>
            <tr>
                <td><?php echo $lancamento4['descricao'] ?></td>
                <td><?php echo $lancamento4['valor'] ?></td>
                <td><?php echo $lancamento4['tipo'] ?></td>
            </tr>
            <tr>
                <td><?php echo $lancamento5['descricao'] ?></td>
                <td><?php echo $lancamento5['valor'] ?></td>
                <td><?php echo $lancamento5['tipo'] ?></td>
            </tr>
            <tr>
                <td><?php echo $lancamento6['descricao'] ?></td>
                <td><?php echo $lancamento6['valor'] ?></td>
                <td><?php echo $lancamento6['tipo'] ?></td>

    </div>

    
    
</body>
</html>