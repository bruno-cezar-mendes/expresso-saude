<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO agente_saude_admin ( nome,sobrenome,email,senha) VALUES ('$nome','$sobrenome','$email','$senha')";
$resultado_usuario = mysqli_query($connection,$result_usuario);

if(mysqli_insert_id($connection)){
        $_SESSION['msg'] = " <p style='color:green; font-size: 150%; display: flex; justify-content: center;'>Cadastro realizado com sucesso!</p>";
        header("Location: telaCadastroAgenteAdm.php");
}else{
    $_SESSION['msg'] = " <p style='color:red; font-size: 150%; display: flex; justify-content: center;'>Cadastro não foi realizado!Preencha todos os campos.</p>";
    header("Location: telaCadastroAgenteAdm.php");
}