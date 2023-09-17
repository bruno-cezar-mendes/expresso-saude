<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Nosso sistema ajuda pacientes a agendar seus respectivos atendimentos nas unidades básicas de sáude de São Lourenço da Mata-PE.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/favicon.ico">
    <link rel="stylesheet" href="css/loginAdm.css">
    <title>Login-Expresso Saúde</title>

    <?php

session_start();
include_once '../bancoAdm.php';
$conexao = new Banco();

if (isset($_POST['email'])){


    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    
    
    $result = $conexao->isUser($email, $senha);

    if($result === FALSE){
        $_SESSION['msg'] = "Dados incorretos! Tente novamente";
        
    }else{
        
        header('Location:../bemVindoAdm.php');
    }
}
?>     
</head>
<body>
    <div class="main-container">
        <div class="left-container">
            <h1>Faça seu Login <br> e cadastre sua Ubs.</h1>
            <img src="../Login_adm/admin.svg" class='img-cartoon'alt="medicoAnimado">
        </div>
        <div class="right-container">
            <div class="card-login">
                <a href="../index.php"><img src="../imagens/logo.png" class="logo" alt="logo"></a>
                <h1>LOGIN</h1>
                <form action="LoginAdm.php" method="POST">
                    <div class="textfield">
                        <label for="email">E-MAIL: </label>
                        <input type="email" name="email" id="email" placeholder="Digite o e-mail cadastrado">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha: </label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                    </div>
                    <div class="form-link">
                        <a href="">Esqueceu sua senha?</a>
                    </div>
                    <button class="btn-login">Login</button>
                </form>
            </div>
        </div>

    </div>
</body>
</html>