<?php
include '../cabecalho.php';
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<div class="container">    
            
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Login</div>
           
            </div>  
            <div class="panel-body" >
                <form method="post" action="logar.php" enctype="multipart/form-data">
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                            
    
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField"> Username<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="Escolha seu username" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_password" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField"> Password<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="id_Password" name="password" placeholder="Seu password" style="margin-bottom: 10px" type="password" />
                            </div>     
                        </div>
                    
                    
                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" name="logar" value="Logar" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>




<?php 
    

    //verifica se existe uma mensagem na sessão
    if( isset( $_SESSION['mensagem'] ) )
    {
        $mensagem = $_SESSION['mensagem'];
    }
?>
