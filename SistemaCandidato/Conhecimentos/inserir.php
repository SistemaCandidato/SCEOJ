<?php

include '../sql/conectar.php';
include_once '../login/autenticacao.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$datainicial = $_POST['datainicial'];
$datafinal = $_POST['datafinal'];  
$local = $_POST['local'];
$status = $_POST['status'];

$id = $_SESSION['id'];

$query = "insert into conhecimentos values (default, '$nome', '$descricao', '$datainicial', '$datafinal', '$local', '$status','$id')";



mysqli_query($conexao, $query);
header('Location: form_inserir.php');


