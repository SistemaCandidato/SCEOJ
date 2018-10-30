<meta charset="UTF-8">
<?php
include '../sql/conectar.php';
include '../cabecalho.php';
 $id = $_GET['id'];
 
 


 

$Areas_id = str_replace(" ", "%", $_GET['q']);

$query = "SELECT     
        candidatos.id,
        candidatos.nome as candidatos ,
        conhecimentos.nome AS conhecimentos, 
        cursos.nome, 
        trabalhos.nome 

FROM candidatos

    LEFT JOIN  conhecimentos ON              candidatos.id =  conhecimentos.candidatos_id 
And conhecimentos.nome LIKE '%$Areas_id%' 

   LEFT JOIN cursos ON 
candidatos.id = cursos.candidatos_id 
And cursos.nome LIKE '%$Areas_id%'

LEFT JOIN trabalhos ON 
    candidatos.id = trabalhos.candidatos_id  
And trabalhos.nome LIKE '%$Areas_id%'";

echo '<br><br><br><br><br><br><br><br>';
echo $query;

$resultado = mysqli_query($conexao, $query);
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
    while ($linha = mysqli_fetch_array($resultado)) {
   ?>
        <tr>
             <td><?= $linha['candidatos'] ?></td>
            <td><?= $linha['conhecimentos']?></td> 
           
           
                        
        </tr>
        </table>
  </div>
        <?php 
    }

    ?>


  

    



    