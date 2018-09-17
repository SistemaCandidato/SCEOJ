

<?php
require_once './sql/conectar.php';
include './cabecalho.php';

$sql = "select razao,cnpj from empresas";

$resultado = mysqli_query($conexao, $sql);

?>
<br><br><br><br>

<div class="container">
  <p>Empresas parceiras</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Razão Social</th>
        <th>Cnpj</th>
     
      </tr>
    </thead>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td><?= $linha['razao']?></td> 
            <td><?= $linha['cnpj'] ?></td>
        



          
        </tr>
        <?php
    }
    ?>

</table>
  </div>
