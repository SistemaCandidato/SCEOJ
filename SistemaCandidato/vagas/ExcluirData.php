<?php
include_once '../sql/conectar.php';

$query = "select vagas_has_candidatos.id, vagas.id from vagas_has_candidatos INNER JOIN vagas
where vagas_has_candidatos.vagas_id = vagas.id and vagas.datafinal <=now() and and vagas.id_empresa = $_SESSION[id]";

if(mysqli_query($conexao, $query)){
    $queryDelete = "delet";
}