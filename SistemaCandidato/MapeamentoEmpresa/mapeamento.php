<?php
    include '../cabecalho.php';


            include '../sql/conectar.php';

            $query = "select vagas.empresa_id,areas.nome,areas.id from areas join vagas on areas.id = vagas.areas_id order by nome";
            
            $retorno = mysqli_query($conexao, $query);
            ?>

        <form method="post" action="listar_mapeamento.php">
           
            Areas: <select name="Areas_id">
                 
<?php
                while ($linha = mysqli_fetch_array($retorno)) {
    ?>
                    <option value="<?= $linha['nome'] ?>"><?= $linha['nome'] ?></option>

                    <?php
                }
                ?>
            </select>

             
            <input type="submit" value="Inserir">
            </form>


<?php

?>



    </body>
</html>

