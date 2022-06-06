<?php

function login() {
    include './telas/login.php';
}

function cadastro() {
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