<?php
include '../cabecalho.php';
include '../sql/conectar.php';

$id = $_SESSION['id'];
$sql = "select * from conhecimentos where id = $id";

$resultado = mysqli_query($conexao, $sql);

?>

<table border="1">
    <tr>
        <td>Nome</td><td>Descrição</td><td>Data Inicial</td><td>Data Final</td><td>Local</td><td>Status</td><td>Excluir</td><td>Alterar</td>
    </tr>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td><?= $linha['nome']?></td> 
            <td><?= $linha['descricao'] ?></td>
            <td><?= $linha['datainicial']?></td> 
            <td><?= $linha['datafinal'] ?></td>
            <td><?= $linha['local']?></td> 
            <td><?= $linha['status'] ?></td>
            


            <td><a href="excluir.php?id=<?= $linha['id'] ?>">
                    <img src="../img/excluir.jpeg" height="30" width="30"/></a></td>

            <td><a href="form_alterar.php?id=<?= $linha['id'] ?>">
                    <img src="../img/alterar.png" height="30" width="30"/></a></td>
        </tr>
        <?php
    }
    ?>

</table>

