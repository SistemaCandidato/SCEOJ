
<?php
include '../sql/conectar.php';
include '../cabecalho.php';

$id = $_GET['id'];
$sql = "select * from vagas where id = $id";

$resultado = mysqli_query($conexao, $sql);

$linha = mysqli_fetch_array($resultado);
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">


        </div>  
        <div class="panel-body" >
            <form method="post" action="alterar.php" enctype="multipart/form-data"> 
                <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                 <input type="hidden" name="id" value="<?= $id ?>">


                <div id="div_id_username" class="form-group required">
                    <label for="id_Dataincio" class="control-label col-md-4  requiredField"> Data inicial<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="datainicio" value="<?= $linha['datainicio'] ?>" placeholder="Data incial" style="margin-bottom: 10px" type="date" />
                    </div>
                </div>
                <div id="div_id_password" class="form-group required">
                    <label for="id_email" class="control-label col-md-4  requiredField"> Data final<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md emailinput form-control" id="id_Password" name="datafinal" placeholder="Data Final" value="<?= $linha['datafinal'] ?>" style="margin-bottom: 10px" type="date" />
                    </div>     
                </div>
                <div id="div_id_nome" class="form-group required">
                    <label for="id_password1" class="control-label col-md-4  requiredField">Nome da vaga<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 "> 
                        <input class="input-md textinput textInput form-control" id="id_nome" name="nome" placeholder="Nome da vaga" value="<?= $linha['nome'] ?>" style="margin-bottom: 10px" type="text" />
                    </div>
                </div>
                <div id="div_id_idade" class="form-group required">
                    <label for="id_idade" class="control-label col-md-4  requiredField"> Descrição<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md textinput textInput form-control" id="id_password2" name="descricao" placeholder="Descricão da vaga" value="<?= $linha['descricao'] ?>" style="margin-bottom: 10px" type="text" />
                    </div>
                </div>
                <div id="div_id_rua" class="form-group required"> 
                    <label for="id_rua" class="control-label col-md-4  requiredField"> Salarío<span class="asteriskField">*</span> </label> 
                    <div class="controls col-md-8 "> 
                        <input class="input-md textinput textInput form-control" id="id_name" name="salario" placeholder="Salario da vaga" value="<?= $linha['salario'] ?>" style="margin-bottom: 10px" type="text" />
                    </div>
                </div>

                <div id="div_id_bairro" class="form-group required"> 
                    <label for="id_bairro" class="control-label col-md-4  requiredField"> Período<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 "> 
                        <input class="input-md textinput textInput form-control" id="id_bairro" name="periodo" value="<?= $linha['periodo'] ?>" placeholder="Período" style="margin-bottom: 10px" type="text" />
                    </div>
                </div> 
                <div id="div_id_numero" class="form-group required">
                    <label for="id_numero" class="control-label col-md-4  requiredField"> Observação<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 "> 
                        <input class="input-md textinput textInput form-control" id="id_catagory" name="obs" value="<?= $linha['obs'] ?>" placeholder="Observação" style="margin-bottom: 10px" type="text" />
                    </div>
                </div> 
                <div id="div_id_number" class="form-group required">
                    <label for="id_number" class="control-label col-md-4  requiredField"> Vale alimentação<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md textinput textInput form-control" id="id_number" name="valealimentacao" value="<?= $linha['valealimentacao'] ?>" placeholder="Vale alimentação" style="margin-bottom: 10px" type="text" />
                    </div> 
                </div> 
                <div id="div_id_location" class="form-group required">
                    <label for="id_location" class="control-label col-md-4  requiredField"> Ajuda de custo<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md textinput textInput form-control" id="id_location" name="ajudadecusto" placeholder="Ajuda de custo" value="<?= $linha['ajudadecusto'] ?>" style="margin-bottom: 10px" type="text" />
                    </div> 
                </div>
                <div class="form-group"> 
                    <div class="aab controls col-md-4 "></div>
                    <div class="controls col-md-8  offset-5">
                        <input type="submit" name="Signup" value="Alterar" class="btn btn-primary btn btn-info" id="submit-id-signup" />

                    </div>
                </div> 
            </form>
        </div>
    </div>
</div>
<


</body>
</html>
