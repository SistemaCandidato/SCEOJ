<?php
include '../login/autenticacao.php';

$id = $_SESSION['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$nomefantasia = $_POST['nomefantasia'];
$razao = $_POST['razao'];
$endereco= $_POST['endereco'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cnpj = $_POST['cnpj'];
$telefone = $_POST['telefone'];

include '../sql/conectar.php';

$sql = "update empresas set username='$username',password='$password',nomefantasia='$nomefantasia',razao='$razao',endereco='$endereco',bairro='$bairro',"
        . "numero='$numero',complemento='$complemento',cidade='$cidade',estado='$estado',cnpj='$cnpj',telefone='$telefone' where id =$id";


mysqli_query($conexao, $sql);

header('Location: listar.php');
