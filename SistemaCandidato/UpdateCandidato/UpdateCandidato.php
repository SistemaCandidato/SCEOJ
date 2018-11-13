
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once '../sql/conectar.php';
        include_once '../login/autenticacao.php';
         $sql = "SELECT vagas_has_candidatos.id,vagas.id, vagas.nome,vagas.descricao,vagas.periodo,empresas.nomefantasia 
from vagas_has_candidatos INNER JOIN vagas ON vagas_has_candidatos.vagas_id = vagas.id INNER JOIN
empresas ON vagas.id_empresa = empresas.id INNER JOIN candidatos ON vagas_has_candidatos.candidatos_id = candidatos.id and candidatos.id = {$_SESSION['id']}
Where 
vagas_has_candidatos.status = 'E'";
                 
         mysqli_query($conexao, $sql);
        ?>
    </body>
</html>
