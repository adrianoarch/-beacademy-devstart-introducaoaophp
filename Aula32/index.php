<?php

$url = $_SERVER['REQUEST_URI'];

include './telas/head.php';
include './telas/menu.php';
include './acoes.php';

match ($url) {
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/cadastro-sucesso' => cadastroSucesso(),
    '/login-sucesso' => loginSucesso(),
    '/login-erro' => loginErro(),
    '/logout' => logout(),
    '/listar' => listar(),
    default => error404()
};

include './telas/footer.php';