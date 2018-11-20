<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <?php

        include '../cabecalho.php';
        
        ?>
        
    </head>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<div class="container">    
            
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Cadastre-se</div>
                
            </div>  
            <div class="panel-body" >
                <form method="post" action="inserir.php" enctype="multipart/form-data"> 
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                            
    
                        <div id="div_id_username" class="form-group required">
                            <label for="id_Dataincio" class="control-label col-md-4  requiredField">Data Inicial<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="datainicio" placeholder="Data Inicial" style="margin-bottom: 10px" type="date" />
                            </div>
                        </div>
                        <div id="div_id_password" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField">Data Final<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="id_Password" name="datafinal" placeholder="Data Final" style="margin-bottom: 10px" type="date" />
                            </div>     
                        </div>
                        <div id="div_id_nome" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField">Nome da Vaga<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="id_nome" name="nome" placeholder="Nome da vaga" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_idade" class="form-group required">
                             <label for="id_idade" class="control-label col-md-4  requiredField">Descrição<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="id_password2" name="descricao" placeholder="Descricão da vaga" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_rua" class="form-group required"> 
                            <label for="id_rua" class="control-label col-md-4  requiredField">Salarío<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="id_name" name="salario" placeholder="Salario da vaga" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="div_id_bairro" class="form-group required"> 
                            <label for="id_bairro" class="control-label col-md-4  requiredField">Período<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" id="id_bairro" name="periodo" placeholder="Período" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div> 
                        <div id="div_id_numero" class="form-group required">
                            <label for="id_numero" class="control-label col-md-4  requiredField">Observação<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" id="id_catagory" name="obs" placeholder="Observação" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div> 
                        <div id="div_id_number" class="form-group required">
                             <label for="id_number" class="control-label col-md-4  requiredField">Vale Alimentação<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="id_number" name="valealimentacao" placeholder="Vale alimentação" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div> 
                        <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField">Ajuda de Custo<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_location" name="ajudadecusto" placeholder="Ajuda de custo" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                         
                     
             


            <br><br><br><br>


<?php
       


            include '../sql/conectar.php';

            $query = "select * from areas order by nome";
            
            $retorno = mysqli_query($conexao, $query);
            ?>

        <select class="row col-sm-3 offset-5" name="Areas_id">

<?php
            while ($linha = mysqli_fetch_array($retorno)) {
    ?>
                    
                  <option value="<?= $linha['id'] ?>"><?= $linha['nome'] ?></option>

                    <?php
                }
                ?>
            </select>

      
           
                    

               
            </div>
        </div>
    </div> 
</div>

<div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8  offset-5">
                                <input type="submit" name="Signup" value="Cadastrar" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                 
                            </div>
                        </div> 

                            
</form>
         

    </body>
</html>



