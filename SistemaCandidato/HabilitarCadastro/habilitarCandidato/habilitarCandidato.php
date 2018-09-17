<?php


ini_set("display_errors", true);

include '../../sql/conectar.php';
include '../../login/autenticacao.php';
   
       autenticar();
       sessaoExpirada();
       
       include '../../cabecalho.php';
$sql = "select * from candidatos where Comp = 0";
$resultado = mysqli_query($conexao, $sql);

?>
<br><br><br><br><br><br><br><br><br><br>
<script type="text/javascript" src="../Java/alertaExclusao.js"></script>;
<div class="container">
  <p>Aprovação de cadastro</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
        <td>Nome</td><td>Idade</td><td>Cidade</td><td>Estado</td><td>Telefone</td><td>RG</td><td>CPF</td><td>Excluir</td><td>Confirmar</td>
    </tr>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
          
            <td><?= $linha['nome']?></td>
            <td><?= $linha['idade']?></td>
            <td><?= $linha['cidade']?></td>
            <td><?= $linha['estado']?></td>
            <td><?= $linha['telefone']?></td>
            <td><?= $linha['rg']?></td>
            <td><?= $linha['cpf']?></td>
            
            <td><a href="excluir.php?id=<?= $linha['id']?>">
                    <img src="../../imagens/excluir.png" class="img-thumbnail" width="50"/></a></td>
              
                    <td align="center"><a href="confirmar.php?id=<?= $linha['id']?>">
                      <img src="../../imagens/confirmar.png" class="img-thumbnail" width="50"/></a></td>
                
              
        </tr>
    <?php
}
?>

</table>
</div>