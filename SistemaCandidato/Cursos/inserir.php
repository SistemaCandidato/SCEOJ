<?php

session_start();



$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$datainicial = $_POST['datainicial'];
$datafinal = $_POST['datafinal'];   
$quantidadesemestres = $_POST['quantidadesemestres'];
$quantidadesemestresfinalizados = $_POST['quantidadesemestresfinalizados'];
include '../sql/conectar.php';
$id = $_SESSION['id'];

$query = "insert into cursos values (default, '$nome', '$descricao', '$datainicial', '$datafinal', '$quantidadesemestres', '$quantidadesemestresfinalizados', '$id',default)";

mysqli_query($conexao, $query);

header('Location: form_inserir.php');
