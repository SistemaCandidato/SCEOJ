
        <?php
       include '../cabecalho.php';
       $id = $_SESSION['id'];
        include '../sql/conectar.php';
        $sql = "select id, nome, descricao, datainicial, datafinal, setor, funcao, tarefas, status from trabalhos where id = $id";
        
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
      <label for="inputSetor">Setor</label>
      <input type="text" required class="form-control" id="inputSetor" placeholder="Setor" name="setor" value="<?= $linha['setor'] ?>">
    </div> 
            
    <div class="form-group col-md-6">
      <label for="inputFunção">Função</label>
      <input type="text" required class="form-control" id="inputFunção" placeholder="Função" name="funcao" value="<?= $linha['funcao'] ?>">
    </div> 
            
    <div class="form-group col-md-6">
      <label for="inputTarefas">Tarefas</label>
      <input type="text" required class="form-control" id="inputTarefas" placeholder="Tarefas" name="tarefas" value="<?= $linha['tarefas'] ?>">
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