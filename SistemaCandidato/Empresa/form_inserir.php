<?php
    require_once '../cabecalho.php';
?>

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
                <form method="post" action="inserir.php">
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                            

                  
                    
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField"> Username<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="Escolha seu username" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_password" class="form-group required">
                            <label for="id_password" class="control-label col-md-4  requiredField"> Password<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="id_Password" name="password" placeholder="Seu password" style="margin-bottom: 10px" type="password" />
                            </div>     
                        </div>
                    <div id="div_id_password" class="form-group required">
                            <label for="id_nomefantasia" class="control-label col-md-4  requiredField"> Nome Fantasia<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="id_nomeFantasia" name="nomefantasia" placeholder="Nome fantasia" style="margin-bottom: 10px" type="text" />
                            </div>     
                    
                        <div id="div_id_nome" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField">Razão Social<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="id_nome" name="razao" placeholder="Razão Social" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_idade" class="form-group required">
                             <label for="id_idade" class="control-label col-md-4  requiredField"> Rua<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_password2" name="rua" placeholder="Rua" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_rua" class="form-group required"> 
                            <label for="id_rua" class="control-label col-md-4  requiredField"> Bairro<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="id_name" name="bairro" placeholder="Bairro" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="div_id_bairro" class="form-group required"> 
                            <label for="id_bairro" class="control-label col-md-4  requiredField"> Número<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" id="id_bairro" name="numero" placeholder="Número" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div> 
                        <div id="div_id_numero" class="form-group required">
                            <label for="id_numero" class="control-label col-md-4  requiredField"> CEP<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" id="id_catagory" name="cep" placeholder="CEP" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div> 
                        <div id="div_id_number" class="form-group required">
                             <label for="id_number" class="control-label col-md-4  requiredField"> Complemento<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="id_number" name="complemento" placeholder="Complemento" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div> 
                        <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> Cidade<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_location" name="cidade" placeholder="Cidade" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                         <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> Estado<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" maxlength="2" id="id_location" name="estado" placeholder="Estado" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                         <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> CNPJ<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_location" name="cnpj" placeholder="CNPJ" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                            
                             <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_location" name="email" placeholder="E-mail" style="margin-bottom: 10px" type="email" />
                            </div> 
                        </div>
               
                         <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> Telefone<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_location" name="telefone" placeholder="Telefone" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                   

                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" name="Signup" value="Signup" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                 
                            </div>
                        </div> 
                            
                    </form>

               
            </div>
        </div>
    </div> 
</div>

</div>       