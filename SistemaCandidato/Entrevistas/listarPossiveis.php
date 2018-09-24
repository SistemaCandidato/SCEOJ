<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <?php
        include '../sql/conectar.php';
      include '../cabecalho.php';
     
echo '<br><br><br><br><br><br><br><br><br><br><br>';
  $sql= " SELECT vagas_has_candidatos.id,
       candidatos.nome,
       candidatos.idade,
       candidatos.email,
       vagas.nome AS VG_nome,
       empresas.razao
FROM vagas_has_candidatos
  INNER JOIN candidatos ON candidatos_id = candidatos.id
  INNER JOIN vagas ON vagas_has_candidatos.vagas_id = vagas.id
  INNER JOIN empresas WHERE vagas.id_empresa = empresas.id
  AND empresas.id = $_SESSION[id] AND vagas_has_candidatos.status = 'I' ";

    
    $resultado = mysqli_query($conexao, $sql);

?>

<div class="container">
  <p>Candidatos que ficaram interessados nas suas vagas</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Nome do candidato</th>
        <th>E-mail</th>
        <th>Idade</th>
        <th>Nome da vaga</th>
        <th>Nome da empresa</th>
        <th>Confirmar entrevista</th>
 
      </tr>
    </thead>
    
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
   
            <td><?= $linha['nome']?></td>
            <td><?= $linha['email']?></td>
            <td><?= $linha['idade'] ?></td>
            <td><?= $linha['VG_nome'] ?></td>
            <td><?= $linha['razao'] ?></td>
            
            

      <td><a href="form_inserir.php?id=<?= $linha['id'] ?>">
              <img src="../imagens/confirmar.png" height="30" width="30"/></a></td>
              
       <td><a href="excluir.php?id=<?= $linha['id'] ?>">
               <img src="../imagens/excluir.png" height="30" width="30"/></a></td>       
              
         
       </tr>
        <?php
    }
    ?>
  </table>




    </body>
</html>
