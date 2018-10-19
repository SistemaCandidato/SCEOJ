<?php
        include '../sql/conectar.php';
        include '../cabecalho.php';
     $id = $_GET['id'];   
   echo $id;
     
?>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

 
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <p class="offset-5">Use palavras-chaves para a busca de um candidato </p>
  <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
      <div class="container">
          <form class="navbar-form navbar-left offset-2 col-8" method="get" action="mapeamento.php">
                <input type="hidden" name="id" value="<?= $id ?>">
        <div class="input-group">
          <input type="text" class="form-control" name="q" placeholder="Pesquisar mapeamento">          
        </div>
             </form>
          </ul>
        </div>
     
    </nav>
      
  