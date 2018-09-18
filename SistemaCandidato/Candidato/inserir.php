
<?php


include '../sql/conectar.php';
include '../PHPMailer-6.0.5/src/PHPMailerAutoload.php';




$username = $_POST['username'];
$password = $_POST['password'];
$nome = $_POST['nome'];
$idade= $_POST['idade'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$telefone= $_POST['telefone'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];


   	 



$smtp = ("insert into candidatos values (default,'$username','$password','$nome',$idade,'$rua','$bairro','$numero','$complemento','$cidade','$estado','$email','$telefone','$rg','$cpf',default,NOW())");
 
echo $smtp;
//mysqli_query($conexao, $smtp);

$message = "
<h3>Olá $nome</h3><br/>
    <p><b>Username: $username</b></p>
    <p><b>Nome: $nome</b></p>
    <p><b>Idade: $idade</b></p>
    <p><b>Rua: $rua</b></p>
    <p><b>Bairro: $bairro</b></p>
    <p><b>Numero: $numero</b></p>
    <p><b>Complemento: $complemento</b></p>
    <p><b>Cidade: $cidade</b></p>
    <p><b>Estado: $estado</b></p>
    <p><b>E-mail: $email</b></p>
    <p><b>Telefone: $telefone</b></p>
    <p><b>RG: $rg</b></p>
    <p><b>CPF: $cpf</b></p>
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
$mail->addAddress($email,$nome);
$mail->Subject = 'Sistema de candidato';
 
$mail->Body = $message;
 
if($mail->Send()):
    echo 'Enviado com sucesso !';
else:
    echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
endif;

 


//header('Location: form_inserir.php');




