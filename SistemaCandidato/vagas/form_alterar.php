
        <?php
        include '../../sql/conectar.php';

   
       include '../cabecalho.php';
       $id = $_SESSION['id'];
      
        $sql = "select id, nome, descricao from areas where id = $id";
        
        $resultado = mysqli_query($conexao, $sql);
        
        $linha = mysqli_fetch_array($resultado);
        
        ?>
        
        
        
      <div class="conteiner">
        
        <div class="row col-sm-4 offset-4" >
        
        <form method="post" class="col-sm-12" action="alterar.php">
            <input type="hidden" name="id" value="<?= $id ?>">
            
             <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control " id="username" required name="nome" value="<?= $linha['nome'] ?>"/>
            </div>
            
             <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="descricao" class="form-control " id="descricao" required name="descricao" value="<?= $linha['descricao'] ?>"/>
                 <input type="submit" class="btn btn-success col-sm-4 offset-8" value="Alterar">
                 
            </div>
        </form>
       
        
        
    </body>
</html>
