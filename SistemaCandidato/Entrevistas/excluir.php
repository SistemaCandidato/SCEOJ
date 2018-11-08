

<?php
ini_set("display_errors", true);
include '../sql/conectar.php';


$vagasMesmo = $_GET['VAGAS_Has'];
$id = $_GET['id'];
$sql = "delete from entrevistas where id= $id";

if (mysqli_query($conexao, $sql)){
    $queryDelete = "delete from vagas_has_candidatos where id = $id";
            mysqli_query($conexao, $queryDelete);

        echo("<script type='text/javascript'> alert('Entrevista excluida !!!'
            ); location.href='ListarEntrevistas.php';</script>");
}Else{
      echo("<script type='text/javascript'> alert('ERROU !!!'
            ); location.href='ListarEntrevistas.php';</script>");
}




