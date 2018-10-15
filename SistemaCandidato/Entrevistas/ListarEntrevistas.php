  <?php
include '../cabecalho.php';
include '../sql/conectar.php';

$id = $_SESSION['id'];
$sql = "SELECT *
FROM entrevistas
INNER JOIN vagas_has_candidatos ON entrevistas.vagas_has_candidatos_id = vagas_has_candidatos.id
INNER JOIN vagas ON vagas_has_candidatos.vagas_id = vagas.id
INNER JOIN empresas ON vagas.id_empresa = empresas.id AND empresas.id = $_SESSION[id]";


$resultado = mysqli_query($conexao, $sql);

?>
<br><br><br><br>
<script type="text/javascript" src="../Java/alertaExclusao.js"></script>;
<div class="container">
  <p>Aqui está seu cadastro, pense bem antes de excluir seus dados</p>                                                                                      
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
            <td><?= $linha['data']?></td> 
            <td><?= $linha['hora'] ?></td>
            <td><?= $linha['status'] ?></td>
           
           
           <td><a onclick="alertaExclusao(<?= $linha['id']?>)" href="javascript:func()">
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
