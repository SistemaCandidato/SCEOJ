     <?php
        include_once '../sql/conectar.php';
        include '../cabecalho.php';
        
        $query = "select vagas_has_candidatos.id,candidatos.nome,candidatos.idade,candidatos.email,empresas.razao,vagas.nome AS vaga,vagas.descricao from vagas_has_candidatos INNER JOIN
                 candidatos ON vagas_has_candidatos.candidatos_id = candidatos.id  AND vagas_has_candidatos.status = 'V' INNER JOIN vagas ON vagas_has_candidatos.vagas_id = vagas.id
                 INNER JOIN empresas ON vagas.id_empresa = empresas.id AND empresas.id = $_SESSION[id]";
                
 
    $resultado = mysqli_query($conexao, $query);

          
        ?>
    <head>
        <br><br><br><br><br><br><br><br><br><br><br>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
   <div class="container">
  <p>Segue os candidatos interessados</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Nome do candidato</th>
        <th>Sua idade</th>
        <th>Nome da vaga</th>
        <th>Descrição da vaga</th>
        <th>Marca entrevista</th>
        <th>Excluir</th>
    
        
      </tr>
    </thead>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
   ?>
        <tr>
             <td><?= $linha['nome']?></td> 
            <td><?= $linha['idade'] ?></td>
            <td><?= $linha['vaga'] ?></td>
            <td><?= $linha['descricao'] ?></td>
           
            
   
    
            <td><a href="../Entrevistas/form_inserir.php?id=<?= $linha['id']?>&email= <?=$linha['email']?> &razao= <?= $linha['razao']?> &nome= <?= $linha['nome']?>">
                    <img src="../imagens/alterar.jpg" height="30" width="30"/></a></td>   
           
                   
        </tr>
        <?php 
    }
    ?>

</table>
  </div>
  
  

    </body>
</html>



