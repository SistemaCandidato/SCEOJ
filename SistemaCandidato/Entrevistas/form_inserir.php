<?php

 include '../sql/conectar.php';   
     

include '../cabecalho.php';


  $id = $_GET['id'];

if(Count($_POST) > 0){

  $data = $_POST['data'];
  $horario = $_POST['horario'];
  $status = $_POST['status'];
  $obs = $_POST['obs'];


$query = "insert into entrevistas values (default,'$data','$horario','$status','$obs',$id)";

mysqli_query($conexao, $query);


$queryUpdate = "update vagas_has_candidatos set status='A' where id =$id";

mysqli_query($conexao, $queryUpdate);
    
header('Location: listarPossiveis.php');
die();
}
     
     
       


?>


<html>
    <link href="../css/bootstrap.css" rel="stylesheet" />
   
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <br><br>
        <div class="conteiner">
        
        <div class="row col-sm-6 offset-3" >
        
            <form action="#" method="post">
  <div class="form-row">
    
      <div class="form-group  col-md-6" >
    <label for="inputData">Data</label>
    <input type="date" required class="form-control" id="inputUsername" placeholder="Data" name="data">
  </div>
         <div class="form-group  col-md-6" >
    <label for="inputHorario">Horario</label>
    <input type="time" required class="form-control" id="inputHorario" placeholder="horario" name="horario">
  </div>
       <div class="form-group  col-md-6" >
    <label for="inputStatus">Status</label>
    <input type="text" maxlength="1" required class="form-control" id="inputStatus" placeholder="Status da entrevista" name="status">
  </div>

    <div class="form-group col-md-6">
      <label for="inputobservacao">Observação</label>
      <input type="text" required class="form-control" id="inputobservacao" placeholder="Observação" name="obs">
    </div>
  </div>

     


 
        </div>                        
               
  <div class="form-group">
      <div class="aab controls col-md-4 "></div>
      <div class="controls col-md-8 "></div>
    <input type="submit" class="btn btn-primary btn btn-info" value="Cadastrar Entrevista!">

    </div>
  </div>


              


           
     
      
    </body>
</html>