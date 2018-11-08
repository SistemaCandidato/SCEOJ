<?php

 include '../sql/conectar.php';   
 include '../PHPMailer-6.0.5/src/PHPMailerAutoload.php';

include '../cabecalho.php';


  $email = $_GET['email'];
  $razao = $_GET['razao'];
  $nome = $_GET['nome'];
  $id = $_GET['id'];

if(Count($_POST) > 0){

  $data = $_POST['data'];
  $datafinal = $_POST['datafinal'];
  $horario = $_POST['horario'];
  $status = $_POST['status'];
  $obs = $_POST['obs'];


$query = "insert into entrevistas values (default,'$data','$datafinal','$horario','$status','$obs',$id)";

mysqli_query($conexao, $query);

$entrevista_id = mysqli_insert_id($conexao);




$queryUpdate = "update vagas_has_candidatos set status='A' where id =$id";

mysqli_query($conexao, $queryUpdate);

$message = "
<h3>Olá $nome, olha que incrível, você conseguiu uma entrevista, parabéns. Abaixo segue as informações que você precisa><br/>
    <p><b>Data: $data</b></p>
    <p><b>Horario: $horario</b></p>
    <p><b>Razão da empresa: $razao</b></p>
    <p>Clique no link ao lado para confirmar a entrevista: 'http://localhost/SistemaCandidato/Entrevistas/StatusEntrevista.php?id=$entrevista_id'<b>
";

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'sistemacandidatoempresa@gmail.com';
$mail->Password = 'candidato123';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->IsHTML(true);
$mail->From = 'sistemacandidatoempresa@gmail.com';
$mail->FromName = 'Sistema do candidato';

$mail->addAddress($email,$nome);
$mail->Subject = 'Sistema de candidato';
 
$mail->Body = $message;
 
if($mail->Send()):
    echo 'Enviado com sucesso !';
else:
    echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
endif;



    
header('Location: ListarEntrevistas.php');

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
    <label for="inputData">Data Final</label>
    <input type="date" required class="form-control" id="inputUsername" placeholder="Data Final" name="datafinal">
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