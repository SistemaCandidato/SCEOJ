
<?php

      include '../cabecalho.php';
      

include '../sql/conectar.php';
$id = $_SESSION['id'];
$sql = "select * from trabalhos where id = $id";

$resultado = mysqli_query($conexao, $sql);

?>
<br><br><br><br>
<script type="text/javascript" src="../Java/alertaExclusao.js"></script>
<div class="container">
  <p>Aqui está seu cadastro, pense bem antes de excluir seus dados</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Data Inicial</th>
        <th>Data Final</th>
        <th>Setor</th>
        <th>Função</th>
        <th>Tarefas</th>
        <th>Status</th>
      </tr>
    </thead>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td><?= $linha['nome']?></td> 
            <td><?= $linha['descricao'] ?></td>
            <td><?= $linha['datainicial'] ?></td>
            <td><?= $linha['datafinal'] ?></td>
            <td><?= $linha['setor']?></td>
            <td><?= $linha['funcao']?></td> 
            <td><?= $linha['tarefas']?></td> 
            <td><?= $linha['status']?></td> 
           
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

