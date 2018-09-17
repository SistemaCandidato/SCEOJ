<?php

$id = $_GET['id'];

include '../../sql/conectar.php';

$sql_pessoa = "update empresas set Comp=1 where id=$id";

mysqli_query($conexao, $sql_pessoa);

header('Location: habilitarEmpresa.php');
