<?php
include '../sql/conectar.php';
$Areas_id = str_replace(" ", "%", $_GET['q']);

$sql  = "SELECT candidatos.nome,
       conhecimentos.nome,
       cursos.nome,
       trabalhos.nome
FROM candidatos
INNER JOIN conhecimentos ON candidatos.id = conhecimentos.candidatos_id
INNER JOIN cursos ON candidatos.id = cursos.candidatos_id
INNER JOIN trabalhos ON candidatos.id = trabalhos.candidatos_id
WHERE candidatos.datainclusao >= DATE_FORMAT(NOW(), '%Y-%m-%d')
AND (candidatos.nome LIKE '%TI%'
       OR conhecimentos.nome LIKE '%TI%'
       OR cursos.nome LIKE '%TI%'
       OR trabalhos.nome LIKE '%TI%')";


$resultado = mysqli_query($conexao, $sql);
?>