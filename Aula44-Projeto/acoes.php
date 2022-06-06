<?php

function login() {
    include './telas/login.php';
}

function cadastro() {
   if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $arquivo = fopen('./dados/contatos.csv', 'a+');
    fwrite($arquivo, "{$nome},{$email},{$telefone}".PHP_EOL);

    fclose($arquivo);
    
    $mensagem = 'Contato cadastrado com sucesso!';

    include './telas/mensagem.php';
   }

    include './telas/cadastro.php';
}

function home() {
    include './telas/home.php';
}

function listar () {
    $contatos = file('./dados/contatos.csv');
    include './telas/listar.php';
}

function relatorios() {
    include './telas/relatorios.php';
};

function error404() {
    include './telas/404.php';
}

function excluir() {
    $id = $_GET['id'];
    $contatos = file('./dados/contatos.csv');
    unset($contatos[$id]);
    $contatos = array_values($contatos);
    $arquivo = fopen('./dados/contatos.csv', 'w');
    foreach ($contatos as $contato) {
        fwrite($arquivo, $contato);
    }
    fclose($arquivo);
    // $mensagem = 'Contato excluído com sucesso!';
    // include './telas/mensagem.php';
    header('Location: /listar');
}
