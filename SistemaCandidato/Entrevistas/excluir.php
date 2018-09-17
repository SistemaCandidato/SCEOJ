

<?php

ini_set("display_errors", true);

include '../sql/conectar.php';

$id = $_GET['id'];

$sql = "delete from vagas_has_candidatos where id= $id";

mysqli_query($conexao, $sql);


header('Location: listarPossiveis.php');