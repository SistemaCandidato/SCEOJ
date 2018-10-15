<?php
include '../cabecalho.php';
include '../sql/conectar.php';

$id = $_SESSION['id'];
$sql = "select * from vagas where id_empresa = $_SESSION[id]";

$resultado = mysqli_query($conexao, $sql);

?>
<br><br><br>
<script type="text/javascript" src="../Java/alertaExclusao.js"></script>;
<div class="container">
  <p>Todas as vagas cadastradas pela sua empresa estão aqui</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Excluir</th>
        <th>Alterar</th>
        
      </tr>
    </thead>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td><?= $linha['nome']?></td> 
            <td><?= $linha['descricao'] ?></td>


            <td><a onclick="alertaExclusao(<?= $linha['id']?>)" href="javascript:func()">
              <img src="../imagens/excluir.png" height="30" width="30"/></a></td>

            <td><a href="form_alterar.php?id=<?= $linha['id'] ?>">
                    <img src="../imagens/alterar.jpg" height="30" width="30"/></a></td>     
        </tr>
        <?php
    }
    ?>

</table>

