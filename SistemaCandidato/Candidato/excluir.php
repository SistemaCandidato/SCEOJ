

<?php

ini_set("display_errors", true);



include '../sql/conectar.php';
include '../login/autenticacao.php';

$id = $_GET['id'];

$sql = "delete from candidatos where id= $id";


mysqli_query($conexao, $sql);


session_destroy();
header('Location: ../index.php');