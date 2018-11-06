
<?php
include '../cabecalho.php';
include '../sql/conectar.php';



$sql  = "SELECT id as idvagas,nome,descricao,salario,obs FROM vagas where id_empresa = $_SESSION[id]";
$resultado = mysqli_query($conexao, $sql);

?>
<br><br><br>
 
<div class="container">
  <p>Escolha uma vaga para selecionar o candidato</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Nome da vaga</th>
        <th>Descrição da vaga</th>
        <th>Salarío</th>
        <th>Observação</th>
        <th>Procurar Candidato</th>
    
        
      </tr>
    </thead>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
   ?>
        <tr>
       
            <td><?= $linha['nome']?></td> 
            <td><?= $linha['descricao'] ?></td>
            <td><?= $linha['salario'] ?></td>
            <td><?= $linha['obs'] ?></td>
           
            
   
    
                 <td><a href="marcarentrevista.php?id=<?= $linha['idvagas']?>">
                    <img src="../imagens/alterar.jpg" height="30" width="30"/></a></td>   
           
                   
        </tr>
        <?php 
    }
    ?>

</table>
  </div>
  
  


