<?php
    session_start();
    include_once 'bancoAdm.php';
    $conexao = new Banco();
    $resultado = $conexao->selectUnidadeSaude();
   
    
    
    /*if (isset($_POST['email'])){

    
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        
        
        $result = $conexao->isUser($email, $senha);

        if($result === FALSE){
            $_SESSION['msg'] = "Dados incorretos! Tente novamente";
            
        }else{
            //$_SESSION['nome'] = $nome;
            //$_SESSION['id'] = $result;
            //unset($_SESSION['msg']);
            header('Location:../telaAgendamento.php');
        }
   */

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Nosso sistema ajuda pacientes a agendar seus respectivos atendimentos nas unidades básicas de sáude de São Lourenço da Mata-PE.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/favicon.ico">
    <link rel="stylesheet" href="CSS/cadastroMedico.css">
    <title>Cadastro-Expresso Saúde</title>
</head>

<body>
    <header class="header">
        <div class="container-logo">
            <a href="index.php"><img class="logo" src="imagens/logo.png" alt="Logo-Marca-imagem"></a>
        </div>
        <nav>
            <a href="index.php" class="nav_menu">Home</a>
            <a href="telaCadastroUnidade.php" class="nav_menu">Cadastro de unidade</a>
            <a href="telaCadastroMedico.php" class="nav_menu">Cadastro de médicos</a>
            <a href="Login_adm/telaLogin.html"><button class="login-btn">Logout</button></a>
        </nav>
    </header>
    <main>
        <h1>CADASTRO DE AGENTE ADMININSTRATIVO</h1>
        
        <form action="validarAgente.php" method="post">
            <fieldset class="fieldsets">
                <legend>INFORMAÇÕES DO ADMININSTRATIVO UNIDADE</legend>
                <div class="Dados_form">
                    <div class="coluna1_form">
                        <label for="nome">NOME: *<input type="text" name="nome" id="nome"required></label>
                    </div>
                    <div class="coluna2_form">
                        <label for="sobrenome">SOBRENOME: *<input type="text" name="sobrenome" id="sobrenome" required></label> 
                        
                    </div>
                    <div class="coluna3_form">
                        <label for="email">EMAIL *<input type="text" name="email" id="email"required></label>
                    </div>
                    
                </div>
                <div class="Dados_form">
                    <div class="coluna1_form">
                        <label for="senha">SENHA *<input type="password" name="senha" id="senha" required></label> 
                    </div>
                    <div class="coluna2_form">
                        <label for="senha">UNIDADE DE SAÚDE: *</label> 
                        <select name="unidade">
                            <?php
                                 foreach ($resultado as $unidade){
                                    echo('<option value="'.$unidade['id_unidade_saudePK'].'" >'.$unidade['nome'].'</option>');
                                }
                            
                            ?>
                        </select>

                    </div>
                    
                    <div class="coluna3_form"> 
                        
                        <label for="btn-apagar"><input class="btn-apagar" type="reset" name="btn-apagar" id="btn-apagar" value="Limpar"></label>
                        <label for="btn-enviar"><input class="btn-enviar" type="submit" name="Sexo" id="SexoF"></label>
                    </div>
            </fieldset>
            <?php
            if (isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }
            
        ?>          
        </form>
        
    </main>
    <footer class="bottom-container">
        <div class="contact_footer">
            <h3>Contatos Secretaria de Saúde SLM</h3>
            <ul class="list-rodape">
                <li>Telefone: (81) 3299-0302</li>
                <a href="mailto:saude@slm.pe.gov.br" class="nav_menu"><li>E-mail: saude@slm.pe.gov.br</li></a>
            </ul>
        </div>
        <div class="midia_footer">
            <h3 class="h3_midia">Redes Sociais</h3>
            <div class="link_midia">
                <a href="https://www.instagram.com/prefeitura_slm/" target="_blank"><img class="img-insta" src="imagens/insta.png" alt=""></a>
                <a href="https://www.youtube.com/channel/UCPyORbqYNet_3WesxO0vTGw" target="_blank"><img class="img-youtube" src="imagens/youtube.png" alt=""></a>
                <a href="https://www.facebook.com/prefslm/" target="_blank"><img class="img-youtube" src="imagens/face.png" alt=""></a>
            </div>   
       </div>
        
    </footer>
    <p class="copyright">© 2022 Expresso Saúde.</p>
    
</body>

</html>