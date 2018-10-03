<?php

include '../sql/conectar.php';
include_once '../login/autenticacao.php';



$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$datainicial = $_POST['datainicial'];
$datafinal = $_POST['datafinal'];   
$quantidadesemestres = $_POST['quantidadesemestres'];
$quantidadesemestresfinalizados = $_POST['quantidadesemestresfinalizados'];
$status = $_POST['status'];
$candidato_id = $_POST['candidato_id'];


$id = $_SESSION['id'];

$query = "insert into cursos values (default, '$nome', '$descricao', '$datainicial', '$datafinal', '$quantidadesemestres', '$quantidadesemestresfinalizados', '$status', '$id',$candidato_id)";

echo $query;
exit();

mysqli_query($conexao, $query);

header('Location: form_inserir.php');
