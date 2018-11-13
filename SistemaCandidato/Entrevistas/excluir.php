

<?php
ini_set("display_errors", true);
include '../sql/conectar.php';



$id = $_GET['id'];
$sql = "delete from vagas_has_candidatos where id= $id";

if (mysqli_query($conexao, $sql)){
          echo("<script type='text/javascript'> alert('Possivel entrevista excluida !!!'
            ); location.href='ListarPossiveis.php';</script>");
            } else {
                 echo("<script type='text/javascript'> alert('Impossivel excluir a possivel entrevista !!!'
            ); location.href='ListarPossiveis.php';</script>");
}
    






