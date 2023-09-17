<?php

    session_start();
    include_once 'banco.php';
    $conexao = new Banco();

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $datanascimento = $_POST['datanascimento'];
    $sexo = $_POST['sexo'];
    $cpf = $_POST['cpf'];
    $cartsus = $_POST['cartsus'];
    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = "$cep;$logradouro;$numero;$complemento;$bairro;$cidade;$estado";
    
    
    $result = $conexao->insertUsuario($nome, $sobrenome, $cpf, $cartsus, $datanascimento, $email, $sexo, $endereco, $senha);

    if($result === FALSE){
        $_SESSION['msg'] = "Dados incorretos! Tente novamente";
        header('Location: index.php');
    }else{
        $_SESSION['nome'] = $nome;
        $_SESSION['id'] = $result;
        unset($_SESSION['msg']);
        header('Location:LoginUsuario/loginUsuario.php');
    }
?> 