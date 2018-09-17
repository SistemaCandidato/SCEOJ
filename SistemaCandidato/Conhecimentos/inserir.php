<?php




$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$datainicial = $_POST['datainicial'];
$datafinal = $_POST['datafinal'];  
$local = $_POST['local'];
$status = $_POST['status'];
include '../sql/conectar.php';
$id = $_SESSION['id'];


$query = "insert into conhecimentos values (default, '$nome', '$descricao', '$datainicial', '$datafinal', '$local', '$status' '$id',default)";

mysqli_query($conexao, $query);

header('Location: form_inserir.php');

