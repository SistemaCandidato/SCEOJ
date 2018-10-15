

<?php
include '../cabecalho.php';
include '../sql/conectar.php';

$id = $_SESSION['id'];
$sql = "select * from empresas where id = $id";

$resultado = mysqli_query($conexao, $sql);

?>
<br><br><br><br>
<script type="text/javascript" src="../Java/alertaExclusao.js"></script>
<div class="container">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <p>Aqui está seu cadastro, você pode fazer alterações no cadastro e até excluir o mesmo</p>                                                                                      
  <div class="table-responsive">          
  <table class="table table-sm ">
  <thead>
    <tr>
      <th>Login</th>
      <th>Senha</th>
      <th>Razão Social</th>
      <th>Endereço</th>
      <th>Bairro</th>
      <th>Número</th>
      <th>Complemento</th>
      <th>Cidade</th>
      <th>Estado</th>
      <th>CNPJ</th>
      <th>Telefone</th>
      <th>Excluir</th>
      <th>Alterar</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td><?= $linha['username']?></td> 
            <td><?= $linha['password'] ?></td>
            <td><?= $linha['razao'] ?></td>
            <td><?= $linha['endereco'] ?></td>
            <td><?= $linha['bairro'] ?></td>
            <td><?= $linha['numero'] ?></td>
            <td><?= $linha['complemento'] ?></td>
            <td><?= $linha['cidade'] ?></td>
            <td><?= $linha['estado'] ?></td>
            <td><?= $linha['cnpj'] ?></td>
            <td><?= $linha['telefone'] ?></td>
            



          <td><a onclick="alertaExclusao(<?= $linha['id']?>)" href="javascript:func()">
              <img src="../imagens/excluir.png" height="30" width="30"/></a></td>
              
               <td><a href="form_alterar.php?id=<?= $linha['id'] ?>">
                    <img src="../imagens/alterar.jpg" height="30" width="30"/></a></td>
                    
        </tr>
        <?php
    }
    ?>

</table>
  </div>
