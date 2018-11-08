  <?php
include '../cabecalho.php';
include '../sql/conectar.php';


$sql = "SELECT entrevistas.id,entrevistas.data,entrevistas.datafinal,entrevistas.hora,entrevistas.status,vagas_has_candidatos.id AS VAGAS_Has
FROM entrevistas
INNER JOIN vagas_has_candidatos ON entrevistas.vagas_has_candidatos_id = vagas_has_candidatos.id
INNER JOIN vagas ON vagas_has_candidatos.vagas_id = vagas.id
INNER JOIN empresas ON vagas.id_empresa = empresas.id AND empresas.id = $_SESSION[id]";


$resultado = mysqli_query($conexao, $sql);

?>
<br><br><br><br>
<script type="text/javascript" src="../Java/alertaExclusao.js"></script>;
<div class="container">
  <p>Segue suas entrevistas</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Data</th>
        <th>Horarío</th>
        <th>Status</th>
   
      </tr>
    </thead>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <?= $linha['VAGAS_Has']?>;
            <td><?= $linha['data']?></td> 
            <td><?= $linha['datafinal']?></td>
            <td><?= $linha['hora'] ?></td>
            <td><?= $linha['status'] ?></td>
           
           
            <td><a href="excluir.php?id=<?= $linha['id']?>&VAGAS_Has=<?= $linha['VAGAS_Has']?>">
              <img src="../imagens/excluir.png" height="30" width="30"/></a></td>
              
              <td><a href="form_alterar.php?id=<?= $linha['id'] ?>">
                    <img src="../imagens/alterar.jpg" height="30" width="30"/></a></td>

        </tr>
        <?php
       
    }
    ?>


 


 </table>
    </div>
  
  </div>
