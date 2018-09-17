<?php


$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$nome = $_POST['nome'];
$idade= $_POST['idade'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$telefone= $_POST['telefone'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
include '../sql/conectar.php';

$sql = "update candidatos set username='$username',password='$password',nome='$nome',idade=$idade,endereco='$endereco',bairro='$bairro',numero = '$numero', complemento = '$complemento',"
        . "cidade='$cidade',estado = '$estado', email = '$email', telefone='$telefone',rg = '$rg', cpf='$cpf' where id = $id";


mysqli_query($conexao, $sql);

header('Location: listar.php');
