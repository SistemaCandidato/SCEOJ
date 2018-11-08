<meta charset="UTF-8">
<?php
include '../sql/conectar.php';
include '../cabecalho.php';


 $idVagas = $_GET['Idvagas'];
 echo $idVagas;
 
 

$Areas_id = str_replace(" ", "%", $_GET['q']);

$resultado  = "SELECT DISTINCT   
        candidatos.id,
        candidatos.nome AS candidato ,
        conhecimentos.nome AS conhecimentos, 
        cursos.nome AS cursos, 
        trabalhos.nome AS trabalhos

FROM candidatos


    LEFT JOIN  conhecimentos ON candidatos.id =  conhecimentos.candidatos_id 
And conhecimentos.nome LIKE '%$Areas_id%' 

   LEFT JOIN cursos ON 
candidatos.id = cursos.candidatos_id 
And cursos.nome LIKE '%$Areas_id%'

LEFT JOIN trabalhos ON 
    candidatos.id = trabalhos.candidatos_id  
And trabalhos.nome LIKE '%$Areas_id%'

WHERE conhecimentos.nome IS NOT NULL OR cursos.nome IS NOT NULL OR trabalhos.nome IS NOT NULL";

$result = mysqli_query($conexao, $resultado);




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
    while ($linha = mysqli_fetch_array($result)) {
          
   ?>
        <tr>
           
            <td><?= $linha['candidato']?></td> 
            <td><?= $linha['conhecimentos'] ?></td>
            <td><?= $linha['cursos'] ?></td>
            <td><?= $linha['trabalhos'] ?></td>
          
           
            <td><a href="inserir.php?id=<?= $linha['id'] ?>&idVagas=<?= $idVagas ?>">
                    <img src="../imagens/alterar.jpg" height="30" width="30"/></a></td>
                        
        </tr>
     

        <?php 
    }
   
    ?>
           </table>
  </div>
</div>


  