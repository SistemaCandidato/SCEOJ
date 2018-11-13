<?php
include '../../sql/conectar.php';
 
include '../../cabecalho.php';

ini_set("display_errors", true);


$sql = "select * from candidatos where Comp = 0";
$resultado = mysqli_query($conexao, $sql);

?>
<br><br><br><br><br><br><br><br><br><br>
<script type="text/javascript" src="../Java/alertaExclusao.js"></script>;
<div class="container">
  <p>Aprovação de cadastro</p>                                                                                      
  <div class="table-responsive ">         
  <table class="table">
      
     <thead class="thead-dark">
        <td>Nome</td><td>Idade</td><td>RG</td><td>CPF</td><td>Excluir</td><td>Ver cadastro completo</td>
    </tr>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
          
            <td><?= $linha['nome']?></td>
            <td><?= $linha['idade']?></td>
            <td><?= $linha['rg']?></td>
            <td><?= $linha['cpf']?></td>
            
            <td><a href="excluir.php?id=<?= $linha['id']?>">
                    <img src="../../imagens/excluir.png"  height="30" width="30"/></a></td>
                    <td align="center"><a href="verCadastro.php?id=<?= $linha['id']?>">
                            <img src="../../imagens/magnifying-glass-145942.png" height="30" width="30"/></a></td>
                
              
        </tr>
    <?php
}
?>
  </thead>
</table>
</div>