<?php

        include '../cabecalho.php';
            include '../sql/conectar.php';
        $id = $_SESSION['id'];
    
        $sql_pessoa = "select * from candidatos where id = $id";
        
        $resultado = mysqli_query($conexao, $sql_pessoa);
        
        $linha = mysqli_fetch_array($resultado);

        ?>

<html>
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <head>
        <meta charset="UTF-8">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <title></title>
    </head>
    <body>
        


        <br><br>
        <div class="conteiner">
        
        <div class="row col-sm-6 offset-14" >
        
            <form action="alterar.php" method="post">
                <input type="hidden" name="id" value="<?= $id ?>">



  
            
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-9 col-md-offset-7 col-sm-8">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="../login/form_login.php">Sign In</a></div>
            </div>  
            <div class="panel-body" >
                <form method="post" action="inserir.php" enctype="multipart/form-data">
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                            
    
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField"> Username<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="Escolha seu username" value="<?= $linha['username']?>" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_password" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField"> Password<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="id_Password" name="password" placeholder="Seu password" value="<?= $linha['password']?>" style="margin-bottom: 10px" type="password" />
                            </div>     
                        </div>
                        <div id="div_id_nome" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField">Nome<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="id_nome" name="nome" placeholder="Seu nome" value="<?= $linha['nome']?>"  style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_idade" class="form-group required">
                             <label for="id_idade" class="control-label col-md-4  requiredField"> Idade<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_password2" name="idade" placeholder="Digite sua idade" value="<?= $linha['idade']?>"  style="margin-bottom: 10px" type="number" />
                            </div>
                        </div>
                        <div id="div_id_rua" class="form-group required"> 
                            <label for="id_rua" class="control-label col-md-4  requiredField"> Rua<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="id_name" name="rua" placeholder="Digite sua rua" value="<?= $linha['endereco']?>"  style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="div_id_bairro" class="form-group required"> 
                            <label for="id_bairro" class="control-label col-md-4  requiredField"> Bairro<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" id="id_bairro" name="bairro" placeholder="Bairro" value="<?= $linha['bairro']?>" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div> 
                        <div id="div_id_numero" class="form-group required">
                            <label for="id_numero" class="control-label col-md-4  requiredField"> Número<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" id="id_catagory" name="numero" placeholder="Número" value="<?= $linha['numero']?>" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div> 
                        <div id="div_id_number" class="form-group required">
                             <label for="id_number" class="control-label col-md-4  requiredField"> Complemento<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="id_number" name="complemento" placeholder="Complemento" value="<?= $linha['complemento']?>" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div> 
                        <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> Cidade<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_location" name="cidade" placeholder="Cidade" value="<?= $linha['cidade']?>" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                         <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> Estado<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_location" name="estado" placeholder="Estado"  value="<?= $linha['estado']?>" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                         <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_location" name="email" placeholder="E-mail" value="<?= $linha['email']?>"  style="margin-bottom: 10px" type="email" />
                            </div> 
                        </div>
                         <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> Telefone<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_location" name="telefone" placeholder="Telefone"  value="<?= $linha['telefone']?>" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                        
                         <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> RG<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_location" name="rg" placeholder="RG" value="<?= $linha['rg']?>"  style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                        
                         <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> CPF<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_location" name="cpf" placeholder="cpf" value="<?= $linha['cpf']?>"  style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                        
                     
                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" name="Signup" value="Cadastrar" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                 
                            </div>
                        </div> 
                            
                    </form>

               
            </div>
        </div>
    </div> 
</div>



