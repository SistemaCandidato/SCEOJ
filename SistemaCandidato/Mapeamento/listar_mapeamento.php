
<?php
include '../cabecalho.php';
include '../sql/conectar.php';

$candidato = $_SESSION['id'];

$Areas_id = str_replace(" ", "%", $_GET['q']);

$sql  = " SELECT ";
$sql .= "   VG.id AS ID,       ";
$sql .= "   AR.nome AS AREA,   ";
$sql .= "   VG.nome AS VAGA,   ";
$sql .= "   EP.razao AS RAZAO, ";
$sql .= "   EP.cidade AS CIDADE,  ";
$sql .= "   EP.estado AS UF,  ";
$sql .= "   IFNULL((SELECT VG_CD.status FROM vagas_has_candidatos VG_CD WHERE VG_CD.vagas_id = VG.id AND VG_CD.candidatos_id = $candidato AND status NOT IN ('D') LIMIT 1),'') AS STATUS, ";
$sql .= "   IFNULL(( SELECT ET.id FROM entrevistas ET where ET.status NOT IN ('D') AND ET.vagas_has_candidatos_id =  IFNULL((SELECT VG_CD.id FROM vagas_has_candidatos VG_CD WHERE VG_CD.vagas_id = VG.id AND VG_CD.candidatos_id = $candidato AND status NOT IN ('D') LIMIT 1),0)),0) AS ENTREVISTA ";

$sql .= " FROM vagas VG ";
$sql .= "   INNER JOIN empresas EP ON ";
$sql .= "     EP.id = VG.id_empresa ";
$sql .= "   INNER JOIN areas AR ON ";
$sql .= "     AR.id = VG.Areas_id ";
$sql .= " WHERE ";
$sql .= "   VG.datainicio <= DATE_FORMAT(NOW(), '%Y-%m-%d') AND VG.datafinal >= DATE_FORMAT(NOW(), '%Y-%m-%d') ";
$sql .= "   AND (VG.nome LIKE '%$Areas_id%' ";
$sql .= "     OR VG.descricao LIKE '%$Areas_id%' ";
$sql .= "     OR VG.obs LIKE '%$Areas_id%' ";
$sql .= "     OR EP.razao LIKE '%$Areas_id%' ";
$sql .= "     OR EP.cidade LIKE '%$Areas_id%' ";
$sql .= "     OR EP.estado LIKE '%$Areas_id%' ";
$sql .= "     OR AR.nome LIKE '%$Areas_id%' ";
$sql .= "     OR AR.descricao LIKE '%$Areas_id%' ";
$sql .= "   ) ";

$resultado = mysqli_query($conexao, $sql);

?>
<br><br><br>
 
<div class="container">
  <p>Segue lista de vagas disponiveis na área que você quer !</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Status</th>
        <th>Area</th>
        <th>Vaga</th>
        <th>Empresa</th>
        <th>Local</th>
        
      </tr>
    </thead>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        $status = "Aberto";
        
        switch ($linha['STATUS']){
            case 'I':
              $status = "Cadastrado";
                break;
                                       
        }
        
        if($linha['ENTREVISTA'] != 0){
            $status = "Agendado";
        }
        
        ?>
        <tr>
            <td><?= $status?></td> 
            <td><?= $linha['AREA']?></td> 
            <td><?= $linha['VAGA'] ?></td>
            <td><?= $linha['RAZAO'] ?></td>
            <td><?= $linha['CIDADE'] ?> - <?= $linha['UF'] ?></td>
            
            <?php if(empty($linha['STATUS'])){ ?>
    
                 <td><a href="marcarentrevista.php?q=<?php echo $_GET['q']; ?>&id=<?= $linha['ID'] ?>">
                    <img src="../imagens/alterar.jpg" height="30" width="30"/></a></td>   
            <?php 
            }else{ ?>
                   <td><a href="marcarentrevista.php?q=<?php echo $_GET['q']; ?>&id=<?= $linha['ID'] ?>">
                    <img src="../imagens/excluir.png" height="30" width="30"/></a></td>   
            <?php } ?>
        </tr>
        <?php 
    }
    ?>

</table>
  </div>
  
  


