
<?php

include '../sql/conectar.php';
      include '../cabecalho.php';
      


$id = $_SESSION['id'];
$sql = "select * from candidatos where id = $id";

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
        <th>Username</th>
        <th>Password</th>
        <th>Idade</th>
        <th>Cidade</th>
        <th>Estado</th>
      </tr>
    </thead>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td><?= $linha['username']?></td> 
            <td><?= $linha['password'] ?></td>
            <td><?= $linha['idade'] ?></td>
            <td><?= $linha['cidade'] ?></td>
            <td><?= $linha['estado'] ?></td>

           
           
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
  