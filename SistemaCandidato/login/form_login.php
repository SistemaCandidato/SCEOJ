     
<html>
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <br><br><br><br><br><br><br>
        <div class="conteiner">

            <div class="row col-sm-10 offset-3" >

                <form action="#" method="post">

                    <div class="form-row">
                        <div class="form-group  col-md-12 offset-4" >
                            <label for="inputUsername">Login</label>
                            <input type="text" required class="form-control" id="inputUsername" placeholder="Login" name="username">
                        </div>
                        <div class="form-group  col-md-12 offset-4" >
                            <label for="inputPassword">Senha</label>
                            <input type="password" required class="form-control" id="inputPassword" placeholder="Senha" name="password">
                        </div>
                        <br><br><br>

                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success col-md-12 offset-4" value="Logar!">
                    </div>
                </form>
            </div>

    </body>
</html>






<?php
include './autenticacao.php';
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
        echo '<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <div class="alert alert-danger  col-sm-5 offset-3" align="center" role="alert">
                Você ainda não foi aprovado pelo administrador. Aguarde um pouco ou solicite ajuda!
            </div></div>';
    }
    $result = getLogin($conexao, "select username,password from empresas where username = '$username' and password = '$password'AND Comp = 0");
    if ($result != Null) {
        echo '<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <div class="alert alert-danger  col-sm-5 offset-3" align="center" role="alert">
                Você ainda não foi aprovado pelo administrador. Aguarde um pouco ou solicite ajuda!
            </div></div>';
    }

    $result = getLogin($conexao, "select username,password from candidatos where username = '$username' and password = '$password'");
    if ($result == Null) {
        echo '<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <div class="alert alert-danger  col-sm-5 offset-3" align="center" role="alert">
                Usuário não encontrado!
            </div></div>';
    }


    }
?>
<?php
include '../cabecalho.php';
?> 
