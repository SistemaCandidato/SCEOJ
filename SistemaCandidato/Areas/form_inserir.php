<?php
    require_once '../cabecalho.php';
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<br><br><br><br><br><br><br><br><br>

<div class="container">    
            
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                 <div class="panel-title">Cadastro de áreas</div>
            </div>  
            <div class="panel-body" >
                <form method="post" action="inserir.php" enctype="multipart/form-data">
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                            
    
                        <div id="div_id_username" class="form-group required">
                            <label for="id_nome" class="control-label col-md-4  requiredField"> Nome<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="nome" placeholder="Nome" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_password" class="form-group required">
                            <label for="id_descricao" class="control-label col-md-4  requiredField"> Descrição<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="id_Password" name="descricao" placeholder="Descrição" style="margin-bottom: 10px" type="text" />
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

                            
              