<?php 
include_once '../../sql/conectar.php';
include '../../cabecalho.php';

$id =  $_GET['id'];

$query = "SELECT * FROM candidatos where id = $id";

 $resultado = mysqli_query($conexao, $query);
        
        $linha = mysqli_fetch_array($resultado);


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
        
        <form action="confirmar.php" method="post">
            <div class="container">    
            
    <div class="container">    
            
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Informações do candidato</div>
           
            </div>  
            <div class="panel-body">
                <form method="post" action='confirmar.php' enctype="multipart/form-data">
               
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                    <input type="hidden" name="id" value="<?= $id ?>">
                            
    
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField"> Username<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" readonly="readonly" maxlength="30" name="username" placeholder="Escolha seu username" value="<?= $linha['username']?>" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                
                        <div id="div_id_nome" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField">Nome<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="id_nome" name="nome" readonly="readonly" placeholder="Seu nome" value="<?= $linha['nome']?>"  style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_idade" class="form-group required">
                             <label for="id_idade" class="control-label col-md-4  requiredField"> Idade<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_password2" name="idade" readonly="readonly" placeholder="Digite sua idade" value="<?= $linha['idade']?>"  style="margin-bottom: 10px" type="number" />
                            </div>
                        </div>
                        <div id="div_id_rua" class="form-group required"> 
                            <label for="id_rua" class="control-label col-md-4  requiredField"> Rua<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="id_name" name="rua" readonly="readonly" placeholder="Digite sua rua" value="<?= $linha['endereco']?>"  style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="div_id_bairro" class="form-group required"> 
                            <label for="id_bairro" class="control-label col-md-4  requiredField"> Bairro<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" id="id_bairro" name="bairro" readonly="readonly" placeholder="Bairro" value="<?= $linha['bairro']?>" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div> 
                        <div id="div_id_numero" class="form-group required">
                            <label for="id_numero" class="control-label col-md-4  requiredField"> Número<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" id="id_catagory" name="numero" readonly="readonly" placeholder="Número" value="<?= $linha['numero']?>" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div> 
                        <div id="div_id_number" class="form-group required">
                             <label for="id_number" class="control-label col-md-4  requiredField"> Complemento<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="id_number" name="complemento" readonly="readonly" placeholder="Complemento" value="<?= $linha['complemento']?>" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div> 
                        <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> Cidade<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_location" name="cidade" readonly="readonly" placeholder="Cidade" value="<?= $linha['cidade']?>" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                         <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> Estado<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_location" name="estado" readonly="readonly" placeholder="Estado"  value="<?= $linha['estado']?>" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                         <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_location" name="email" readonly="readonly" placeholder="E-mail" value="<?= $linha['email']?>"  style="margin-bottom: 10px" type="email" />
                            </div> 
                        </div>
                         <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> Telefone<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_location" name="telefone" readonly="readonly" placeholder="Telefone"  value="<?= $linha['telefone']?>" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                        
                         <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> RG<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_location" readonly="readonly" name="rg" placeholder="RG" value="<?= $linha['rg']?>"  style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                        
                         <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> CPF<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_location" readonly="readonly" name="cpf" placeholder="cpf" value="<?= $linha['cpf']?>"  style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                    
             
                     
                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" name="Signup" value="Aceitar cadastro" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                 
                            </div>
                        </div> 
                            
                  
        
                     
            
            
            
   
    </body>
</html>
