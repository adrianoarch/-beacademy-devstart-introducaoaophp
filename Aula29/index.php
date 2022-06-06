<?php

$url = $_SERVER['REQUEST_URI'];

include './telas/menu.php';

if ($url === '/'){
    include 'telas/home.php';
} elseif ($url === '/login'){
    include 'telas/login.php';
} elseif ($url === '/cadastro'){
    include 'telas/cadastro.php';
} elseif ($url === '/cadastro-sucesso'){
    include 'telas/cadastro-sucesso.php';
} elseif ($url === '/login-sucesso'){
    include 'telas/login-sucesso.php';
} elseif ($url === '/login-erro'){
    include 'telas/login-erro.php';
} elseif ($url === '/logout'){
    include 'telas/logout.php';
} else {
    include 'telas/404.php';
}