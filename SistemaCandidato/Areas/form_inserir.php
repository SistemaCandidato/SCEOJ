<!DOCTYPE html>

<html>
     <link href="../css/bootstrap.css" rel="stylesheet" />
    <head>
         <?php
     
       include '../login/autenticacao.php';
       include '../sql/conectar.php';
       autenticar();
       sessaoExpirada();
       

   include '../cabecalho.php';
?>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <br><br><br><br><br><br><br><br>
       <div class="conteiner">
        
        <div class="row col-sm-4 offset-4" >
        
        <form method="post" class="col-sm-12" action="inserir.php">
     
            
             <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control " id="nome" required name="nome"/>
            </div>
            
             <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control " id="descricao" required name="descricao"/>
            </div>
<input type="submit" class="btn btn-success col-sm-3 offset-10" value="Cadastrar Área!">
        </form>
        </form>

    </body>
</html>

