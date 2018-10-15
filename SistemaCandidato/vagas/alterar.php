<?php

ini_set("display_errors", true);

include '../sql/conectar.php';
$id = $_POST['id'];
$datainicio = $_POST['datainicio'];
$datafinal = $_POST['datafinal'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$salario = $_POST['salario'];
$periodo = $_POST['periodo'];
$obs = $_POST['obs'];
$valealimentacao = $_POST['valealimentacao'];
$ajudadecusto = $_POST['ajudadecusto'];

$sql = "update vagas set datainicio='$datafinal', datafinal='$datafinal', nome='$nome', descricao='$descricao', salario=$salario, periodo='$periodo', obs='$obs',valealimentacao=$valealimentacao,ajudadecusto=$ajudadecusto where id = $id";

mysqli_query($conexao, $sql);

header('Location: listar.php');