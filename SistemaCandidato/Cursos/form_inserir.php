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
       <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <div class="conteiner">
        
        <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>
            </div>  
            <div class="panel-body" >
                <form method="post" action="inserir.php" enctype="multipart/form-data">
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
           
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
    <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" name="Signup" value="Cadastrar" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                 
                            </div>
                        </div>
    <a class="nav-item">
              <a class="nav-link" href="http://localhost/SistemaCandidato/Cursos/listar.php">Ver Cursos</a>
    </a>        
    </div> 

                </form>

       
     </div> 
    </body>
</html>
