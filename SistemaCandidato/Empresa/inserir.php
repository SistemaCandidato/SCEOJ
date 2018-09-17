<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

include '../sql/conectar.php';

$username = $_POST['username'];
$password = $_POST['password'];
$razao= $_POST['razao'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cnpj = $_POST['cnpj'];
$telefone = $_POST['telefone'];




$query = "insert into empresas values (default,'$username','$password','$razao','$rua','$bairro','$numero','$cep','$complemento','$cidade','$estado','$cnpj','$telefone',default)";

mysqli_query($conexao, $query);

header('Location: form_inserir.php');

    
    
    


