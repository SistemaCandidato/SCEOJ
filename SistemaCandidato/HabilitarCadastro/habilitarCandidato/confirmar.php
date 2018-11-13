<?php
include '../../sql/conectar.php';
$id = $_POST['id'];




$sql_pessoa = "update candidatos set Comp=1 where id=$id";

mysqli_query($conexao, $sql_pessoa);

header('Location: habilitarCandidato.php');
