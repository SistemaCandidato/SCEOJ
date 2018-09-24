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
    <br><br><br><br>
    <body>
       <div class="conteiner">
        
        <div class="row col-sm-9 offset-3" >
        
        <form method="post" action="inserir.php">
     
            
             <div class="form-group row col-sm-11 offset-3">
                <label for="DataInicial">Data Inicial:</label>
                <input type="date" class="form-control " id="datainicio" required name="datainicio"/>
            </div>
             <div class="form-group row col-sm-11 offset-3">
                <label for="DataFinal">Data Final:</label>
                <input type="date" class="form-control " id="datafinal" required name="datafinal"/>
            </div>
            <div class="form-group row col-sm-11 offset-3">
                <label for="Nome">Nome:</label>
                <input type="text" class="form-control " id="nome" required name="nome"/>
            </div>
         
            <div class="form-group row col-sm-11 offset-3">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control " id="descricao" required name="descricao"/>
            </div>
            <div class="form-group row col-sm-11 offset-3">
                <label for="salario">Salarío:</label>
                <input type="number" class="form-control " id="salario" required name="salario"/>
            </div>
            <div class="form-group row col-sm-11 offset-3">
                <label for="Periodo">Periodo:</label>
                <input type="text" class="form-control " id="periodo" required name="periodo"/>
            </div>
            <div class="form-group row col-sm-11 offset-3">
                <label for="Observação">Observação:</label>
                <input type="text" class="form-control " id="observacao" required name="obs"/>
            </div>
            <div class="form-group row col-sm-11 offset-3">
                <label for="ValeAlimentação">Vale Alimentação:</label>
                <input type="number" class="form-control " id="valealimentacao"  name="valealimentacao"/>
            </div>
            <div class="form-group row col-sm-11 offset-3">
                <label for="Nome">Ajuda de custo:</label>
                <input type="number" class="form-control " id="nome"  name="ajudadecusto"/>
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

            <br>
   <input type="submit" class="btn btn-success col-sm-3 offset-10" value="Cadastrar!">
        </form>

  

         

    </body>
</html>



