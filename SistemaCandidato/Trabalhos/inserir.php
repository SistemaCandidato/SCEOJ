<?php

include '../sql/conectar.php';



$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$datainicial = $_POST['datainicial'];
$datafinal = $_POST['datafinal'];
$setor = $_POST['setor'];
$funcao = $_POST['funcao'];
$tarefas = $_POST['tarefas'];
$status = $_POST['status'];
$candidato_id = $_POST['candidato_id'];

$id = $_SESSION['id'];


$query = "insert into trabalhos values (default, '$nome', '$descricao', '$datainicial', '$datafinal', '$setor', '$funcao', '$tarefas', '$status', '$id',$candidato_id)";

echo $query;
exit();

mysqli_query($conexao, $query);

header('Location: form_inserir.php');