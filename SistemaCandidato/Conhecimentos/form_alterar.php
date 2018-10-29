
        <?php
       include '../cabecalho.php';
       $id = $_SESSION['id'];
        include '../sql/conectar.php';
        $sql = "select id, nome, descricao, datainicial, datafinal, local, status from conhecimentos where id = $id";
        
        $resultado = mysqli_query($conexao, $sql);
        
        $linha = mysqli_fetch_array($resultado);
        
        ?>
        
<html>
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <br><br>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <div class="conteiner">
        
        <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>
            </div>  
            <div class="panel-body" >
                <form method="post" action="#" enctype="multipart/form-data">
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
        
            <form action="alterar.php" method="post">
                <input type="hidden" name="id" value="<?= $id ?>">        
                
        <div class="form-row">
      <div class="form-group  col-md-6" >
    <label for="inputNome">Nome</label>
    <input type="text" required class="form-control" id="inputNome" placeholder="Nome" name="nome" value="<?= $linha['nome'] ?>">
  </div>
         <div class="form-group  col-md-6" >
    <label for="inputDescrição">Descrição</label>
    <input type="text" required class="form-control" id="inputDesrcição" placeholder="Descrição" name="descricao" value="<?= $linha['descricao'] ?>">
  </div>
      
    <div class="form-group col-md-6">
      <label for="inputDataInicial">Data Inicial</label>
      <input type="date" required class="form-control" id="inputDataInicial" placeholder="Data Inicial" name="datainicial" value="<?= $linha['datainicial'] ?>">
    </div> 
            
            
    <div class="form-group col-md-6">
      <label for="inputDataFinal">Data Final</label>
      <input type="date" required class="form-control" id="inputDataFinal" placeholder="Data Final" name="datafinal" value="<?= $linha['datafinal'] ?>">
    </div>  
            
    <div class="form-group col-md-6">
      <label for="inputLocal">Local</label>
      <input type="text" required class="form-control" id="inputLocal" placeholder="Local" name="local" value="<?= $linha['local'] ?>">
    </div> 
            
    <div class="form-group col-md-6">
      <label for="inputStatus">Status</label>
      <input type="text" required class="form-control" id="inputStatus" placeholder="Status" name="status" value="<?= $linha['status'] ?>">
    </div>         
            
            
    </div>        
            
    <div class="form-group"> 
        <div class="aab controls col-md-4 "></div>
        <div class="controls col-md-8 ">
        <input type="submit"value="Alterar" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                 
      </div>
  </div>


    </div>
        
        
    </body>
</html>
