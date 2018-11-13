        <?php
        include '../cabecalho.php';
        include_once '../sql/conectar.php';
        include_once '../login/autenticacao.php';
         $sql = "SELECT vagas_has_candidatos.id,vagas.id AS VG, vagas.nome,vagas.descricao,vagas.periodo,empresas.nomefantasia 
from vagas_has_candidatos INNER JOIN vagas ON vagas_has_candidatos.vagas_id = vagas.id INNER JOIN
empresas ON vagas.id_empresa = empresas.id INNER JOIN candidatos ON vagas_has_candidatos.candidatos_id = candidatos.id and candidatos.id = {$_SESSION['id']}
Where 
vagas_has_candidatos.status = 'E'";

   $resultado = mysqli_query($conexao, $sql);
   
   ?>

<br><br><br><br><br>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


<script type="text/javascript" src="../Java/alertaExclusao.js"></script>
<div class="container">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <p>Segue vagas que e suas respectivas empresas que solicitaram seus serviços</p>                                                                                      
  <div class="table-responsive">          
  <table class="table table-sm ">
  <thead>
    <tr>
      <th>Nome da vaga</th>
      <th>Descrição da vaga</th>
      <th>Nome da empresa</th>
      <th>Excluir</th>
      <th>Alterar</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td><?= $linha['nome']?></td> 
            <td><?= $linha['descricao'] ?></td>
            <td><?= $linha['nomefantasia'] ?></td>
       
            



          <td><a onclick="alertaExclusao(<?= $linha['id']?>)" href="javascript:func()">
              <img src="../imagens/excluir.png" height="30" width="30"/></a></td>
              
               <td><a href="VerVaga.php?id=<?= $linha['id'] ?>&VG=<?=$linha['VG']?>">
                    <img src="../imagens/alterar.jpg" height="30" width="30"/></a></td>
                    
        </tr>
        <?php
    }
    ?>

</table>
  </div>

  
    </body>
</html>
