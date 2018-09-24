
<?php
require_once '../login/autenticacao.php';
include '../sql/conectar.php';


$datainicio = $_POST['datainicio'];
$datafinal = $_POST['datafinal'];
$nome= $_POST['nome'];
$descricao=$_POST['descricao'];
$salario = $_POST['salario'];
$periodo = $_POST['periodo'];
$obs =$_POST['obs'];
$valealimentacao = $_POST['valealimentacao'];
$ajudadecusto = $_POST['ajudadecusto'];
$id = $_SESSION['id'];
$Areas_id=$_POST['Areas_id'];


$query = "insert into vagas values (default,'$datainicio','$datafinal','$nome','$descricao','$salario','$periodo','$obs','$valealimentacao','$ajudadecusto',$id,$Areas_id)";


mysqli_query($conexao, $query);

header('Location: form_inserir.php');


