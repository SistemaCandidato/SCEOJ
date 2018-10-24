<?php


ini_set("display_errors", true);

       
include '../../sql/conectar.php';
include '../../cabecalho.php';


$sql = "select * from empresas where Comp = 0";
$resultado = mysqli_query($conexao, $sql);

?>

<br><br><br><br><br><br><br><br><br><br>
<script type="text/javascript" src="../Java/alertaExclusao.js"></script>;
<div class="container">
  <p>Aprovação de cadastro</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
        <td>Razão Social</td><td>Endereço</td><td>Bairro</td><td>Número</td><td>Cidade</td><td>CNPJ</td><td>Telefone</td><td>Excluir</td><td>Confirmar</td>
    </tr>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
          
            <td><?= $linha['razao']?></td>
            <td><?= $linha['endereco']?></td>
            <td><?= $linha['bairro']?></td>
            <td><?= $linha['numero']?></td>
            <td><?= $linha['cidade']?></td>
            <td><?= $linha['cnpj']?></td>
            <td><?= $linha['telefone']?></td>
            
            <td><a href="excluir.php?id=<?= $linha['id']?>">
                    <img src="../../imagens/excluir.png"  width="50"/></a></td>
              
                    <td><a href="confirmar.php?id=<?= $linha['id']?>">
                            <img src="../../imagens/confirmar.png"  width="50"/></a></td>
                
              
        </tr>
    <?php
}
?>

</table>
</div>