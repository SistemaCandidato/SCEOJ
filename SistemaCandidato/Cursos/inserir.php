<?php


include '../sql/conectar.php';
$id = $_SESSION ['id'];

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$datainicial = $_POST['datainicial'];
$datafinal = $_POST['datafinal'];   
$quantidadesemestres = $_POST['quantidadesemestres'];
$quantidadesemestresfinalizados = $_POST['quantidadesemestresfinalizados'];
$id = $_SESSION['id'];

if(!empty($nome) && !empty($descricao) && !empty($datainicial) && !empty($datafinal) && !empty($quantidadesemestres) && !empty($quantidadesemestresfinalizados)){

$query = "insert into cursos values (default, '$nome', '$descricao', '$datainicial', '$datafinal', '$quantidadesemestres', '$quantidadesemestresfinalizados', '$id')";


mysqli_query($conexao, $query);

header('Location: form_inserir.php');

} else {
 
    echo 'Preencha todos os campos por favor';
    echo "<a href='http://localhost/SistemaCandidato/Cursos/form_inserir.php'>Cursos -</a>";
    
}
