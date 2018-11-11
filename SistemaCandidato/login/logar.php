<?php

include './autenticacao.php';
include '../sql/conectar.php';

ini_set("display_errors", true);

$username = $_POST['username'];

$password = $_POST['password']; 


function getLogin($conexao,$sql){
    $retorno = mysqli_query($conexao,$sql);
    $resultado = mysqli_fetch_array($retorno);
    return $resultado;
}
 
$result = getLogin($conexao, "select * from administrador where username = '$username' and password = '$password'");
if($result != Null){
    logar($result['username'], $result['id'], "A");
    header('Location: ../index.php');
    die();
}

$result = getLogin($conexao, "select * from candidatos where username = '$username' and password = '$password'AND Comp !=0");
if($result != Null){
    logar($result['username'], $result['id'], "C");
    header('Location: ../index.php');
    die();
}

$result = getLogin($conexao, "select * from empresas where username = '$username' and password = '$password'AND Comp!=0");
if($result != Null){
    logar($result['username'], $result['id'], "E");
    header('Location: ../index.php');
    die();
}
    $result = getLogin($conexao, "select username,password from candidatos where username = '$username' and password = '$password'AND Comp = 0");
 if ($result != Null) {
            
        echo("<script type='text/javascript'> alert('Voce ainda nao foi aprovado pelo administrador'
     ); location.href='form_login.php';</script>");

    }
    $result = getLogin($conexao, "select username,password from empresas where username = '$username' and password = '$password'AND Comp = 0");
    if ($result != Null) {
         
    
        echo("<script type='text/javascript'> alert('Voce ainda nao aprovado pelo administrador'
            ); location.href='form_login.php';</script>");

    }

    $result = getLogin($conexao, "select username,password from candidatos where username = '$username' and password = '$password'");
    if ($result == Null) {
     
    
    echo("<script type='text/javascript'> alert('Usuario e/ou senha incorretos !!!'
            ); location.href='form_login.php';</script>");

    }
    $result = getLogin($conexao, "select username,password from empresas where username = '$username' and password = '$password'");
    if ($result == Null) {
     
    
    echo("<script type='text/javascript'> alert('Usuario e/ou senha incorretos'
            ); location.href='form_login.php';</script>");

    }

