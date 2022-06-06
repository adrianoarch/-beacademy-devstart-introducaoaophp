<?php

$url = $_SERVER['REQUEST_URI'];

include './telas/head.php';
include './telas/menu.php';
include './acoes.php';

if ($url === '/'){
    home();
} elseif ($url === '/login'){
    login();
} elseif ($url === '/cadastro'){
    cadastro();
} elseif ($url === '/cadastro-sucesso'){
    cadastroSucesso();
} elseif ($url === '/login-sucesso'){
    loginSucesso();
} elseif ($url === '/login-erro'){
    loginErro();
} elseif ($url === '/logout'){
    logout();
} elseif ($url === '/listar'){
    listar();
} else {
    error404();
}

include './telas/footer.php';