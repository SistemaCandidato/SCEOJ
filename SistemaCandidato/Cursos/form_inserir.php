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
       <title>Cursos</title>
   </head>
   <body>
       <br><br>
        <div class="conteiner">
        
            <div class="row col-sm-6 offset-3" >
                
                <form method="post" action="inserir.php">
           
        <div class="form-row">
      <div class="form-group  col-md-6" >
    <label for="inputUsername">Nome</label>
    <input type="text" required class="form-control" id="inputUsername" placeholder="Nome" name="nome">
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
      <label for="inputQuantidadedeSemestres">Quantidade de Semestres</label>
      <input type="number" required class="form-control" id="inputQuantidadedeSemestres" placeholder="Quantidade de Semestres" name="quantidadesemestres">
    </div>  
    
    <div class="form-group col-md-6">
      <label for="inputQuantidadedeSemestresFinalizados">Quantidade de Semestres Finalizados</label>
      <input type="number" required class="form-control" id="inputQuantidadedeSemestresFinalizados" placeholder="Quantidade de Semestres Finalizados" name="quantidadesemestresfinalizados">
    </div> 
            
    <div class="form-group col-md-6">
      <label for="inputStatus">Status</label>
      <input type="text" required class="form-control" id="inputStatus" placeholder="Status" name="status">
    </div>            
            
       
    </div> 
                </form>

    <div class="form-group">
      <input type="submit" class="btn btn-success col-sm-20 offset-20" value="Cadastrar!">
    </div>
                    
    <h5 class="nav-item">
              <a class="nav-link" href="http://localhost/SistemaCandidato/Cursos/listar.php">Ver Cursos</a>
            </h5>                 
  </div>

        </div>
       
     
    </body>
</html>
