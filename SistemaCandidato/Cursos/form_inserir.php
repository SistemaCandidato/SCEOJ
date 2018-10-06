<?php
   include '../cabecalho.php';
include '../sql/conectar.php';
include '../PHPMailer-6.0.5/src/PHPMailerAutoload.php';

$username = $_POST['username'];
$password = $_POST['password'];
$nomefantasia = $_POST['nomefantasia'];
$razao= $_POST['razao'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];




$query = "insert into empresas values (default,'$username','$password','$nomefantasia','$razao','$rua','$bairro','$numero','$cep','$complemento','$cidade','$estado','$cnpj','$email','$telefone',default,NOW())";

mysqli_query($conexao, $query);

$message = "
<h3>Olá $razao você se cadastrou no Stc</h3><br/>
    <p><b>Username: $username</b></p>
    <p><b>Nome: $nomefantasia</b></p>
    <p><b>Idade: $razao</b></p>
    <p><b>Rua: $rua</b></p>
    <p><b>Bairro: $bairro</b></p>
    <p><b>Numero: $numero</b></p>
    <p><b>Complemento: $complemento</b></p>
    <p><b>Cidade: $cidade</b></p>
    <p><b>Estado: $estado</b></p>
    <p><b>CNPJ: $cnpj</b></p>
    <p><b>E-mail: $email</b></p>
    <p><b>Telefone: $telefone</b></p>
   
";

// Instância do objeto PHPMailer
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
$mail->addAddress($email,$nomefantasia);
$mail->Subject = 'Sistema de candidato';
 
$mail->Body = $message;
 
if($mail->Send()):
    echo 'Enviado com sucesso !';
else:
    echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
endif;



header('Location: form_inserir.php');
?>
<html>
    <link href="../css/bootstrap.css" rel="stylesheet" />

 
  
   <head>
       <meta charset="UTF-8">
       <title>Cursos</title>
   </head>
   <body>
       <br><br>
        <div class="conteiner">
        
            <div class="row col-sm-6 offset-3" >
                
                <form method="post" action="#">
           
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

       
     
    </body>
</html>
