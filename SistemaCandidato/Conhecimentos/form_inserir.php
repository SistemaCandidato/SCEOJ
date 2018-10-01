<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <?php
       include '../cabecalho.php';
     ?>  
   <head>
       <meta charset="UTF-8">
       <title>Conhecimentos</title>
   </head>
   <body>
       <br><br>
        <div class="conteiner">
        
            <div class="row col-sm-6 offset-3" >
                
       <form method="post" action="inserir.php">
       
      <div class="form-row">
      <div class="form-group  col-md-6" >
    <label for="inputUsername">Nome</label>
    <input type="text" required class="form-control" id="inputUsername" placeholder="Nome" name="username">
  </div>
         <div class="form-group  col-md-6" >
    <label for="inputDescrição">Descrição</label>
    <input type="text" required class="form-control" id="inputDescrição" placeholder="Descrição" name="descricao">
  </div>
      
    <div class="form-group col-md-6">
      <label for="inputDataInicial">Data Inicial</label>
      <input type="date" required class="form-control" id="inputDataInicial" placeholder="Data Inicial" name="datainicial">
    </div>
          
    <div class="form-group col-md-6">
      <label for="inputDataFinal">Data Final</label>
      <input type="date" required class="form-control" id="inputDataFinal" placeholder="Data Final" name="datafinal">
    </div>
          
    <div class="form-group col-md-6">
      <label for="inputLocal">Local</label>
      <input type="text" required class="form-control" id="inputLocal" placeholder="Local" name="local">
    </div> 
            
    <div class="form-group col-md-6">
      <label for="inputStatus">Status</label>
      <input type="text" required class="form-control" id="inputStatus" placeholder="Status" name="status">
    </div>        
          
    </div>     
           
    <?php
            include '../sql/conectar.php';

            $query = "select * from candidatos order by nome";
            
            $retorno = mysqli_query($conexao, $query);
            ?>

        <select class="form-group col-md-4" name="candidatos_id">

<?php
            while ($linha = mysqli_fetch_array($retorno)) {
    ?>
                    
                  <option value="<?= $linha['id'] ?>"><?= $linha['nome'] ?>
                  </option>

                    <?php
                }
                ?>
            </select>       
    
    <div class="form-group">
      <input type="submit" class="btn btn-success col-sm-20 offset-20" name="cadastrar" value="Cadastrar!">
    </div>
           
    <h5 class="nav-item">
              <a class="nav-link" href="http://localhost/SistemaCandidato/Conhecimentos/listar.php">Ver Conhecimentos</a>
            </h5>         
  </div>


                  </div>       
            
    </body>
</html>



