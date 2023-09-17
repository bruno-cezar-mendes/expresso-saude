<?php

    session_start();
    include_once 'bancoAdm.php';
    $conexao = new Banco();

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $unidade = $_POST['unidade'];
   
    $result = $conexao->insertAdmin($nome, $sobrenome, $email, $senha, $unidade);

    if($result === FALSE){
        $_SESSION['msg'] = "Dados incorretos! Tente novamente";
    }else{
        $_SESSION['msg'] = "Cadastrado com sucesso!";   
    }
    header('Location: telaCadastroAgenteAdm.php');
?> 