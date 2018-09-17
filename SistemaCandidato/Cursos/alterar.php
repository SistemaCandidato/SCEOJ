<?php
$id = $_SESSION ['id'];

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$datainicial = $_POST['datainicial'];
$datafinal = $_POST['datafinal'];   
$quantidadesemestres = $_POST['quantidadesemestres'];
$quantidadesemestresfinalizados = $_POST['quantidadesemestresfinalizados'];

include '../sql/conectar.php';

$sql = "update cursos set nome='$nome', descricao='$descricao', datainicial='$datainicial', datafinal='$datafinal', quantidadesemestres='$quantidadesemestres', quantidadesemestresfinalizados='$quantidadesemestresfinalizados' where id =$id";

echo $sql;

mysqli_query($conexao, $sql);

header('Location: form_inserir.php');