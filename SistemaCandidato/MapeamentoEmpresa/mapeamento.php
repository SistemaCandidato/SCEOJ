<meta charset="UTF-8">
<?php
include '../sql/conectar.php';
include '../cabecalho.php';
 $id = $_GET['id'];
 
 


 

$Areas_id = str_replace(" ", "%", $_GET['q']);

$resultado  = ("select candidatos.id,candidatos.nome AS candidato,conhecimentos.nome FROM candidatos INNER JOIN conhecimentos WHERE candidatos.id = conhecimentos.candidatos_id AND conhecimentos.nome LIKE '%$Areas_id%'");
$oi = mysqli_query($conexao, $resultado);

if($oi != NULL){
?>
 <meta charset="UTF-8">
<br><br><br><br><br><br><br><br>
<div class="container">
  <p>Escolha uma vaga para selecionar o candidato</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Nome candidato</th>
        <th>Conhecimentos</th>
        <th>Cursos</th>
        <th>Trabalhos</th>
        <th>Mostrar interesse</th>
    
        
      </tr>
    </thead>
<?php
    while ($linha = mysqli_fetch_array($oi)) {
   ?>
        <tr>
       
            <td><?= $linha['candidato']?></td> 
            <td><?= $linha['nome'] ?></td>
           
                        
        </tr>
        </table>
  </div>
        <?php 
    }
    }
    ?>


  

    



    