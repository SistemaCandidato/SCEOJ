<?php
include '../cabecalho.php';
include '../sql/conectar.php';

if(Count($_GET) <=0 ){
    header("location: http://localhost/SistemaCandidato/index.php");
    die();
}

$q = $_GET['q'];
$id = $_GET['id'];
$candidato = $_SESSION['id'];
$link_voltar = "http://localhost/SistemaCandidato/Mapeamento/listar_mapeamento.php?q=$q";


$sqlCand  = " SELECT COUNT(*) AS INSC ";
$sqlCand .= " FROM vagas_has_candidatos vhc ";
$sqlCand .= " WHERE vhc.candidatos_id = $candidato ";
$sqlCand .= "     AND vhc.status != 'D' ";
$sqlCand .= "         and EXISTS ( ";
$sqlCand .= "                 SELECT *  ";
$sqlCand .= "                 FROM vagas vg  ";
$sqlCand .= "                 WHERE vg.id = vhc.vagas_id  ";
$sqlCand .= "                 and datafinal >= CURDATE() ";
$sqlCand .= "                 ) ";

$res = mysqli_fetch_array(mysqli_query($conexao, $sqlCand)); 
$nInsc = $res['INSC'];
$res = null;

$sql2 = "SELECT IFNULL(id,0) AS ID FROM vagas_has_candidatos WHERE candidatos_id = $candidato AND vagas_id = $id AND status != 'D'";
$res2 = mysqli_fetch_array(mysqli_query($conexao, $sql2)); 
$isInc = $res2['ID'];
$res2 = null;

if(isset($_GET['status']) && !empty($_GET['status'])){
    
    if($_GET['status'] == 1 && $nInsc < 3 && $isInc == 0 ){
        $sql = "INSERT INTO vagas_has_candidatos (vagas_id,candidatos_id,status) VALUE($id,$candidato,'I')";
        mysqli_query($conexao, $sql);

    }
    
    if($_GET['status'] == 2 && $isInc != 0 ){
        
        $sql = " DELETE FROM entrevistas WHERE entrevistas.vagas_has_candidatos_id = IFNULL((SELECT vagas_has_candidatos.id FROM vagas_has_candidatos WHERE vagas_has_candidatos.vagas_id = $id AND vagas_has_candidatos.candidatos_id = $candidato),0) ";
        mysqli_query($conexao, $sql);
        
        $sql = "DELETE FROM vagas_has_candidatos WHERE vagas_id = $id AND candidatos_id = $candidato";
        mysqli_query($conexao, $sql);

        
    }

    header("location: $link_voltar");
    die();
}



$sql = "SELECT * FROM vagas where id = $id";
 $resultado = mysqli_query($conexao, $sql);
        
        $linha = mysqli_fetch_array($resultado);



?>
<br><br><br><br><br>



   <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="container">    
            
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                Veja as informações da vaga
            </div>  
            <div class="panel-body" >
                <form method="get" action="http://localhost/SistemaCandidato/Mapeamento/marcarentrevista.php?q=$q&id=$id">


                <div id="div_id_username" class="form-group required">
                    <label for="id_Dataincio" class="control-label col-md-4  requiredField">Data Inicial<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md  textinput textInput form-control" readonly="readonly" id="id_username" maxlength="30" name="datainicio" value="<?= $linha['datainicio'] ?>" placeholder="Data incial" style="margin-bottom: 10px" type="date" />
                    </div>
                </div>
                <div id="div_id_password" class="form-group required">
                    <label for="id_email" class="control-label col-md-4  requiredField">Data Final<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md emailinput form-control" id="id_Password" readonly="readonly" name="datafinal" placeholder="Data Final" value="<?= $linha['datafinal'] ?>" style="margin-bottom: 10px" type="date" />
                    </div>     
                </div>
                <div id="div_id_nome" class="form-group required">
                    <label for="id_password1" class="control-label col-md-4  requiredField">Nome da Vaga<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 "> 
                        <input class="input-md textinput textInput form-control" readonly="readonly" id="id_nome" name="nome" placeholder="Nome da vaga" value="<?= $linha['nome'] ?>" style="margin-bottom: 10px" type="text" />
                    </div>
                </div>
                <div id="div_id_idade" class="form-group required">
                    <label for="id_idade" class="control-label col-md-4  requiredField">Descrição<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md textinput textInput form-control" readonly="readonly" id="id_password2" name="descricao" placeholder="Descricão da vaga" value="<?= $linha['descricao'] ?>" style="margin-bottom: 10px" type="text" />
                    </div>
                </div>
                <div id="div_id_rua" class="form-group required"> 
                    <label for="id_rua" class="control-label col-md-4  requiredField">Salarío<span class="asteriskField">*</span> </label> 
                    <div class="controls col-md-8 "> 
                        <input class="input-md textinput textInput form-control" readonly="readonly" id="id_name" name="salario" placeholder="Salario da vaga" value="<?= $linha['salario'] ?>" style="margin-bottom: 10px" type="text" />
                    </div>
                </div>

                <div id="div_id_bairro" class="form-group required"> 
                    <label for="id_bairro" class="control-label col-md-4  requiredField">Período<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 "> 
                        <input class="input-md textinput textInput form-control" readonly="readonly" id="id_bairro" name="periodo" value="<?= $linha['periodo'] ?>" placeholder="Período" style="margin-bottom: 10px" type="text" />
                    </div>
                </div> 
                <div id="div_id_numero" class="form-group required">
                    <label for="id_numero" class="control-label col-md-4  requiredField">Observação<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 "> 
                        <input class="input-md textinput textInput form-control" readonly="readonly" id="id_catagory" name="obs" value="<?= $linha['obs'] ?>" placeholder="Observação" style="margin-bottom: 10px" type="text" />
                    </div>
                </div> 
                <div id="div_id_number" class="form-group required">
                    <label for="id_number" class="control-label col-md-4  requiredField">Vale alimentação<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md textinput textInput form-control" readonly="readonly" id="id_number" name="valealimentacao" value="<?= $linha['valealimentacao'] ?>" placeholder="Vale alimentação" style="margin-bottom: 10px" type="text" />
                    </div> 
                </div> 
                <div id="div_id_location" class="form-group required">
                    <label for="id_location" class="control-label col-md-4  requiredField">Ajuda de custo<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md textinput textInput form-control" readonly="readonly" id="id_location" name="ajudadecusto" placeholder="Ajuda de custo" value="<?= $linha['ajudadecusto'] ?>" style="margin-bottom: 10px" type="text" />
                    </div> 
                </div>
                </form>
                    </div>
                </div> 
    </div>
</div>

        </div>
    </div>
</div>



    <p style="text-align: center"><a href="<?php echo $link_voltar; ?>">Voltar</a></p><br/>
    <?php if($nInsc < 3 && $isInc == 0){ ?>
        <p style="text-align: center"><a href="http://localhost/SistemaCandidato/Mapeamento/marcarentrevista.php?q=<?php echo $q; ?>&id=<?php echo$id; ?>&status=1">Aceitar</a></p>
    <?php } ?>
    

    <?php if($isInc != 0){ ?>
        <p style="text-align: center"><a href="http://localhost/SistemaCandidato/Mapeamento/marcarentrevista.php?q=<?php echo $q; ?>&id=<?php echo$id; ?>&status=2">Excluir</a></p>
    <?php } ?>        
        