<?php

session_start();

include '../sql/conectar.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$datainicial = $_POST['datainicial'];
$datafinal = $_POST['datafinal'];
$setor = $_POST['setor'];
$funcao = $_POST['funcao'];
$tarefas = $_POST['tarefas'];
$id = $_SESSION['id'];

if(!empty($nome) && !empty($descricao) && !empty($datainicial) && !empty($datafinal) && !empty($setor) && !empty($funcao) && !empty($tarefas)){

$query = "insert into trabalhos values (default, '$nome', '$descricao', '$datainicial', '$datafinal', '$setor', '$funcao', '$tarefas', '$id')";

echo $sql;

}

mysqli_query($conexao, $query);

header('Location: form_inserir.php');