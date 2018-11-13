   <?php
        include_once '../sql/conectar.php';
        include '../cabecalho.php';
        $id = $_POST['id'];
   
        $query = "Update vagas_has_candidatos set status = 'V' where id = $id";
        echo $query;
        if (mysqli_query($conexao, $query)){
             echo("<script type='text/javascript'> alert('Deu certo, aguarde a empresa marcar a entrevista, você receberá por e-mail'
            ); location.href='UpdateCandidato.php';</script>");
        }else{
                   echo("<script type='text/javascript'> alert('Algo errado aconteceu '
            ); location.href='UpdateCandidato.php';</script>");
        }
        
        
        ?>

