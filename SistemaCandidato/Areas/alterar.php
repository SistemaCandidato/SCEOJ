<?php


$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];

include '../sql/conectar.php';

$sql = "update areas set nome='$nome',descricao='$descricao where id = $id";

echo $sql;

mysqli_query($conexao, $sql);

header('Location: form_inserir.php');
