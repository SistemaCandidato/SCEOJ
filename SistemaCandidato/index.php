<?php

include 'cabecalho.php';
require_once './login/autenticacao.php';
require_once 'rodape.php';

  if (estaLogado()) {
             if (isMyType("E")) {
                 include($dir . '/menus/menuEmpresa.php');
               
             }
            if (isMyType("C")){
                include($dir . '/menus/menuCandidato.php');
                
            }
            if (isMyType("A")) {
                include ($dir . '/menus/menuAdministrador.php');
            }
  }  else {
            include($dir . '/menus/menuOFF.php');
        
            
        }
