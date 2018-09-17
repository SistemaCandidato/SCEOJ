<?php

session_start();

include '../sql/conectar.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$datainicial = $_POST['datainicial'];
$datafinal = $_POST['datafinal'];  
$id = $_SESSION['id'];

if(!empty($nome) && !empty($descricao) && !empty($datainicial) && !empty($datafinal)){

$query = "insert into conhecimentos values (default, '$nome', '$descricao', '$datainicial', '$datafinal', '$id')";

echo $sql;

//mysqli_query($conexao, $query);

//header('Location: form_inserir.php');

} 