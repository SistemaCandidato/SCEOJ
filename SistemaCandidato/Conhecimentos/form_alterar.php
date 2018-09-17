
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
        <div class="conteiner">
        
        <div class="row col-sm-6 offset-3" >
        
            <form action="alterar.php" method="post">
                <input type="hidden" name="id" value="<?= $id ?>">        
                
        <div class="form-row">
      <div class="form-group  col-md-6" >
    <label for="inputNome">Nome</label>
    <input type="text" required class="form-control" id="inputNome" placeholder="Login" name="username" value="<?= $linha['username'] ?>">
  </div>
         <div class="form-group  col-md-6" >
    <label for="inputDescrição">Descrição</label>
    <input type="text" required class="form-control" id="inputDesrcição" placeholder="Senha" name="password" value="<?= $linha['password'] ?>">
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
    <input type="submit" class="btn btn-success col-sm-4 offset-8" value="Alterar">

    </div>
  </div>


    </div>
        
        
    </body>
</html>
