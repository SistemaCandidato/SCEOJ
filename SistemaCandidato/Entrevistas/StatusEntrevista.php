<?php
include '../sql/conectar.php';

$identrevista = $_GET['id'];


$sql = "update entrevistas set status = 'C' where id = $identrevista";
mysqli_query($conexao, $sql);

header('Location: ../index.php');