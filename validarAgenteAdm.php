<?php

    session_start();
    include_once 'banco.php';
    $conexao = new Banco();

   
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = "$cep;$logradouro;$numero;$complemento;$bairro;$cidade;$estado";
    $id_unidade_saudeFK = $_POST ['$id_unidade_saudeFK'];
    
    
    $result = $conexao->insertUsuario($nome, $sobrenome, $email,$senha, $endereco, $id_unidade_saudeFK);

    if($result === FALSE){
        $_SESSION['msg'] = "Dados incorretos! Tente novamente";
        header('Location: index.php');
    }else{
        $_SESSION['nome'] = $nome;
        $_SESSION['id'] = $result;
        unset($_SESSION['msg']);
        header('Location:Login_adm/LoginAdm.php');
    }
?> 