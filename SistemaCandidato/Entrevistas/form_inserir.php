<?php
include '../PHPMailer-6.0.5/src/PHPMailerAutoload.php';
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



  $nome =$_GET['nome'];
  $email = $_GET['email'];
$message = "
<h3>Olá $nome</h3><br/>
    <p><b>Data: $data</b></p>
    <p><b>Horario: $horario</b></p>
    <p><b>Observação: $obs</b></p>
 
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

//so muda apartir daqui
$mail->addAddress($email,$nome);
$mail->Subject = 'Sistema de candidato';
 
$mail->Body = $message;
 
if($mail->Send()):
    echo 'Enviado com sucesso !';
else:
    echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
endif;



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

    <div class="form-group col-md-3">
      <label for="inputobservacao">Observação</label>
      <input type="text" required class="form-control" id="inputobservacao" placeholder="Observação" name="obs">
    </div>
  </div>

     


 
        </div>                        
               
  <div class="form-group">
    <input type="submit" class="btn btn-success col-sm-2 offset-5" value="Cadastrar Entrevista!">

    </div>
  </div>


              


           
     
      
    </body>
</html>