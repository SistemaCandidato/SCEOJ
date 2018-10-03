

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<?php
include 'autenticacao.php';
include '../sql/conectar.php';


ini_set("display_errors", true);

if (Count($_POST) > 0) {
    $username = $_POST['username'];

    $password = $_POST['password'];

    function getLogin($conexao, $sql) {
        $retorno = mysqli_query($conexao, $sql);
        $resultado = mysqli_fetch_array($retorno);
        return $resultado;
    }

    $result = getLogin($conexao, "select username,password from administrador where username = '$username' and password = '$password'");
    if ($result != Null) {
        logar($result['username'], $result['id'], "A");
        header('Location: ../index.php');
        die();
    }

    $result = getLogin($conexao, "select username,password from candidatos where username = '$username' and password = '$password'AND Comp !=0");
    if ($result != Null) {
        logar($result['username'], $result['id'], "C");
        header('Location: ../index.php');
        die();
    }

    $result = getLogin($conexao, "select username,password from empresas where username = '$username' and password = '$password'AND Comp!=0");
    if ($result != Null) {
        logar($result['username'], $result['id'], "E");
        header('Location: ../index.php');
        die();
    }


    $result = getLogin($conexao, "select username,password from candidatos where username = '$username' and password = '$password'AND Comp = 0");
    if ($result != Null) {
           $_SESSION['mensagem'] = 'Dado atualizado com sucesso !!!';
    
    echo("<script type='text/javascript'> alert('Você ainda não foi aprovado pelo administrador !!!'
    ); location.href='form_login.php';</script>");

    }
    $result = getLogin($conexao, "select username,password from empresas where username = '$username' and password = '$password'AND Comp = 0");
    if ($result != Null) {
          $_SESSION['mensagem'] = 'Dado atualizado com sucesso !!!';
    
echo("<script type='text/javascript'> alert('Você ainda não aprovado pelo administrador !!!'
); location.href='form_login.php';</script>");

    }

    $result = getLogin($conexao, "select username,password from candidatos where username = '$username' and password = '$password'");
    if ($result == Null) {
           $_SESSION['mensagem'] = 'Dado atualizado com sucesso !!!';
    
echo("<script type='text/javascript'> alert('Usuário e/ou senha incorretos !!!'
); location.href='form_login.php';</script>");

    }
}