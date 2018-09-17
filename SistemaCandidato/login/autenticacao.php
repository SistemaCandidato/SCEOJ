<?php
session_start();

function logar($username,$id,$tipo) { 
    $_SESSION['username'] = $username;
     $_SESSION['id'] = $id;
     $_SESSION['tipo'] = $tipo;
    iniciarTempoSessao();
}

function deslogar() {
    session_destroy();
}

function sessaoExpirada() {
    if ($_SESSION['tempo'] < time()) {
        return true;
    } else {
        // reiniciar sessao
        iniciarTempoSessao();
        return false;
    }
}

function autenticar() {
    //se NAO estaLogado ou sessaoExpirada
    if (!estaLogado() || sessaoExpirada()) {
        deslogar();
        header('Location: ../login/form_login.php');
    } else {
        return true;
    }
}

function estaLogado() {
    return isset($_SESSION['username']);
}

function exibirUsername() {
    return $_SESSION['username'];
}

function isMyType($type){
    return $type == $_SESSION['tipo'];
}

function iniciarTempoSessao() {
    $_SESSION['tempo'] = time() + 10;
}


