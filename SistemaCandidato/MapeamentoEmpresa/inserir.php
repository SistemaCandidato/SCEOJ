<?php
include '../sql/conectar.php';
$idvaga = $_GET['idVagas'];
$status = 'I';
$id = $_GET['id'];

$query = "insert into vagas_has_candidatos VALUES(default,'$idvaga','$id','$status')";
if(mysqli_query($conexao, $query)){
            echo("<script type='text/javascript'> alert('Cadastro realizado com suecesso, aguarde a confirmação do usuário !!!'
            ); location.href='listar_mapeamento.php';</script>");
}Else{
    echo("<script type='text/javascript'> alert('Deu erro !'
            );</script>");
}
    
