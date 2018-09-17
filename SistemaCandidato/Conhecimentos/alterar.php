<?php
$id = $_SESSION ['id'];

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$datainicial = $_POST['datainicial'];
$datafinal = $_POST['datafinal'];     

include '../sql/conectar.php';

$sql = "update conhecimentos set nome='$nome', descricao='$descricao', datainicial='$datainicial', datafinal='$datafinal' where candidatos_id =$id";

echo $sql;

mysqli_query($conexao, $sql);

header('Location: form_inserir.php');