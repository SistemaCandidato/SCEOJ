<?php

$nome = $_POST['nome'];
$descricao= $_POST['descricao'];
include '../sql/conectar.php';
include '../login/autenticacao.php';

$id = $_SESSION['id'];
$query = "insert into areas values (default,'$nome','$descricao', $id)";


mysqli_query($conexao, $query);
header('Location: form_inserir.php');