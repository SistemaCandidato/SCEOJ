

<?php
require_once './sql/conectar.php';
include './cabecalho.php';

$sql = "select nomefantasia,cnpj from empresas";

$resultado = mysqli_query($conexao, $sql);

?>
<br><br><br><br>

<div class="container">
  <p>Empresas parceiras</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Nome Fantasia</th>
        <th>Cnpj</th>
     
      </tr>
    </thead>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td><?= $linha['nomefantasia']?></td> 
            <td><?= $linha['cnpj'] ?></td>
        



          
        </tr>
        <?php
    }
    ?>

</table>
  </div>
