<?php

        include '../cabecalho.php';
        $id = $_SESSION['id'];
        include '../sql/conectar.php';
        $sql_pessoa = "select * from empresas where id = $id";
        
        $resultado = mysqli_query($conexao, $sql_pessoa);
        
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
    <label for="inputUsername">Login</label>
    <input type="text" required class="form-control" id="inputUsername" placeholder="Login" name="username" value="<?= $linha['username'] ?>">
  </div>
         <div class="form-group  col-md-6" >
    <label for="inputPassword">Senha</label>
    <input type="password" required class="form-control" id="inputUsername" placeholder="Senha" name="password" value="<?= $linha['password'] ?>">
  </div>
      
    <div class="form-group col-md-6">
      <label for="inputNome">Razão Social</label>
      <input type="text" required class="form-control" id="inputNome" placeholder="Nome" name="razao" value="<?= $linha['razao'] ?>">
    </div>
  
      

  </div>
  <div class="form-group " >
    <label for="inputEndereco">Rua</label>
    <input type="text" required class="form-control" id="inputEndereco" placeholder="Sua rua" name="endereco" value="<?= $linha['endereco'] ?>">
  </div>
  <div class="form-group ">
    <label for="inputBairro">Bairro</label>
    <input type="text" required class="form-control" id="inputBairro" placeholder="Seu bairro" name="bairro" value="<?= $linha['bairro'] ?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNumero">Número</label>
      <input type="text" maxlength="5" required class="form-control" id="inputNumero" placeholder="Número da casa" name="numero" value="<?= $linha['numero'] ?>">
    </div>
 
    <div class="form-group col-md-6">
      <label for="inputComplemento">Complemento</label>
      <input type="text"  class="form-control" id="inputComplemento" placeholder="Complemento" name="complemento" value="<?= $linha['complemento'] ?>">
    </div>
      
       <div class="form-group col-md-6">
      <label for="inputCidade">Cidade</label>
      <input type="text" required class="form-control" id="inputCidade" placeholder="Cidade" name="cidade" value="<?= $linha['cidade'] ?>">
    </div>
  
    <div class="form-group col-md-4">
      <label for="inputState">Estado</label>
      <input  type="text" maxlength="2" required class="form-control"  id="inputEstado" placeholder="Estado" name="estado" value="<?= $linha['estado'] ?>" >
    </div>
      <div class="form-group col-md-4">
      <label for="inputCnpj">CNPJ</label>
      <input  type="text" maxlength="2" required class="form-control"  id="inputEstado" placeholder="CNPJ" name="cnpj" value="<?= $linha['cnpj'] ?>" >
    </div>
    
      
      <div class="form-group col-sm-6 ">
    <label for="inputTelefone">Telefone</label>
    <input type="text" required class="form-control" id="inputTelefone" placeholder="Telefone" name="telefone" value="<?= $linha['telefone'] ?>">
  </div> 
 
      
      
      
  </div>
     
               
               
               
  <div class="form-group">
    <input type="submit" class="btn btn-success col-sm-4 offset-8" value="Cadastrar!">

    </div>
  </div>


                  </div>


           
     
      
    </body>
</html>

