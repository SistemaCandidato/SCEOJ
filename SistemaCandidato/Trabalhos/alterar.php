<?php
$id = $_SESSION ['id'];

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$datainicial = $_POST['datainicial'];
$datafinal = $_POST['datafinal'];
$setor = $_POST['setor'];
$funcao = $_POST['funcao'];
$tarefas = $_POST['tarefas'];
$status = $_POST['status'];

include '../sql/conectar.php';

$sql = "update trabalhos set nome='$nome', descricao='$descricao', datainicial='$datainicial', datafinal='$datafinal', setor='$setor', funcao='$funcao', tarefas='$tarefas', status='$status' where id =$id";

echo $sql;

mysqli_query($conexao, $sql);

header('Location: form_inserir.php');