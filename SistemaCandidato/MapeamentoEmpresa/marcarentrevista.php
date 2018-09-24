<?php
include '../cabecalho.php';
include '../sql/conectar.php';

if(Count($_GET) <=0 ){
    header("location: http://localhost/SistemaCandidato/index.php");
    die();
}

$q = $_GET['q'];
$id = $_GET['id'];
$candidato = $_SESSION['id'];
$link_voltar = "http://localhost/SistemaCandidato/Mapeamento/listar_mapeamento.php?q=$q";

$sqlCand = "SELECT COUNT(*) AS INSC FROM vagas_has_candidatos WHERE candidatos_id = $candidato AND status != 'D'";
$res = mysqli_fetch_array(mysqli_query($conexao, $sqlCand)); 
$nInsc = $res['INSC'];
$res = null;

$sql2 = "SELECT IFNULL(id,0) AS ID FROM vagas_has_candidatos WHERE candidatos_id = $candidato AND vagas_id = $id AND status != 'D'";
$res2 = mysqli_fetch_array(mysqli_query($conexao, $sql2)); 
$isInc = $res2['ID'];
$res2 = null;

if(isset($_GET['status']) && !empty($_GET['status'])){
    
    if($_GET['status'] == 1 && $nInsc < 3 && $isInc == 0 ){
        $sql = "INSERT INTO vagas_has_candidatos (vagas_id,candidatos_id,status) VALUE($id,$candidato,'I')";
        mysqli_query($conexao, $sql);

    }
    
    if($_GET['status'] == 2 && $isInc != 0 ){
        
        $sql = " DELETE FROM entrevistas WHERE entrevistas.vagas_has_candidatos_id = IFNULL((SELECT vagas_has_candidatos.id FROM vagas_has_candidatos WHERE vagas_has_candidatos.vagas_id = $id AND vagas_has_candidatos.candidatos_id = $candidato),0) ";
        mysqli_query($conexao, $sql);
        
        $sql = "DELETE FROM vagas_has_candidatos WHERE vagas_id = $id AND candidatos_id = $candidato";
        mysqli_query($conexao, $sql);

        
    }

    header("location: $link_voltar");
    die();
}



$sql = "SELECT * FROM vagas where id = $id";
$resultado = mysqli_query($conexao, $sql);


?>
<br><br><br><br><br>

<form method="get" action="http://localhost/SistemaCandidato/Mapeamento/marcarentrevista.php?q=$q&id=$id">

    <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Data de inicio</th>
        <th>Data final</th>
        <th>Nome da vaga</th>
        <th>Descrição da vaga</th>
        <th>Salarío</th>
      </tr>
    </thead>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td><?= $linha['datainicio']?></td> 
            <td><?= $linha['datafinal'] ?></td>
            <td><?= $linha['nome'] ?></td>
            <td><?= $linha['descricao'] ?></td>
            <td><?= $linha['salario'] ?></td>
            
      </tr>
        <?php
    }
    ?>

</table>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>
    <p style="text-align: center"><a href="<?php echo $link_voltar; ?>">Voltar</a></p><br/>
    <?php if($nInsc < 3 && $isInc == 0){ ?>
        <p style="text-align: center"><a href="http://localhost/SistemaCandidato/Mapeamento/marcarentrevista.php?q=<?php echo $q; ?>&id=<?php echo$id; ?>&status=1">Aceitar</a></p>
    <?php } ?>
    

    <?php if($isInc != 0){ ?>
        <p style="text-align: center"><a href="http://localhost/SistemaCandidato/Mapeamento/marcarentrevista.php?q=<?php echo $q; ?>&id=<?php echo$id; ?>&status=2">Excluir</a></p>
    <?php } ?>        
        
