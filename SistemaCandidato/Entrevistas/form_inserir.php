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
  $obs = $_POST['obs'];


$query = "insert into entrevistas values (default,'$data','$datafinal','$horario',default,'$obs',$id)";

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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">    
            
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="../login/form_login.php">Sign In</a></div>
            </div>  
            <div class="panel-body" >
                <form method="post" action="#">
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                            

                  
                    
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField"> Data inicial<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" required id="id_username" maxlength="30" name="data" placeholder="Escolha a data inicial" style="margin-bottom: 10px" type="date" />
                            </div>
                        </div>
                        <div id="div_id_password" class="form-group required">
                            <label for="id_password" class="control-label col-md-4  requiredField"> Data final<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="id_Password" required name="datafinal" placeholder="Escolha a data final" style="margin-bottom: 10px" type="date" />
                            </div>     
                        </div>
                    <div id="div_id_password" class="form-group required">
                            <label for="id_nomefantasia" class="control-label col-md-4  requiredField">Horario<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="id_nomeFantasia" required name="horario" placeholder="Escolha o horario" style="margin-bottom: 10px" type="time" />
                            </div>     
                    
                        <div id="div_id_nome" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField">Observação<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="id_nome" required name="obs" placeholder="Digite a observação" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                    </div>
                       
                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" name="Signup" value="Signup" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                            </div> 
                        </div>
                      
                </form>