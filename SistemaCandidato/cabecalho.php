
<!DOCTYPE html>
<html>
    <head>
        <title>SistemaCandidato</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://localhost/SistemaCandidato/css/bootstrap.min.css" rel="stylesheet">
        
    </head>
    <body>
        <?php
        $dir = str_replace('\\', '/', dirname(__FILE__)).'/';
        require_once 'login/autenticacao.php';
   
        if (estaLogado()) {
             if (isMyType("E")) {
                 include($dir . '/navBar/navBarEmpresa.inc');
               
             }
            if (isMyType("C")){
                include($dir . '/navBar/navBarCandidato.php');
                
            }
            if (isMyType("A")) {
                include ($dir . '/navBar/navBarAdministrador.php');
            }
            
            echo 'Bem vindo ' . exibirUsername();
        } else {
            include($dir . './navBar/navBarOFF.php');
        
            
        }
       
        



       
