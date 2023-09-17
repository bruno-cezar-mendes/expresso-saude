<!DOCTYPE html>
<html >

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Nosso sistema ajuda pacientes a agendar seus respectivos atendimentos nas unidades básicas de sáude de São Lourenço da Mata-PE.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/favicon.ico">
    <link rel="stylesheet" href="CSS/cadastroUnidade.css">
    <title>Cadastro Unidade-Expresso Saúde</title>
</head>

<body>
    <header class="header">
        <div class="container-logo">
            <a href="index.php"><img class="logo" src="imagens/logo.png" alt="Logo-Marca-imagem"></a>
        </div>
        <nav>
            <a href="index.php" class="nav_menu">Home</a>
            <a href="telaCadastroAgenteAdm.php" class="nav_menu">Cadastro administrativo</a>
            <a href="telaCadastroMedico.php" class="nav_menu">Cadastro de médicos</a>
            <a href="Login_adm/LoginAdm.html"><button class="login-btn">Logout</button></a>
        </nav>
    </header>
    <main>
        <h1 class="teste">CADASTRO DA UNIDADE</h1>
        <form action="Login_adm/telaLogin.html" method="post" class="form_cadastro">
            <fieldset>
                <legend>DADOS UNIDADE</legend>
                <div class="dados_form">
                    <label for="Nome">NOME DA UNIDADE: *</label>
                    <input type="text" name="Nome" id="Nome">
                    <label for="Sobrenome">TELEFONE DA UNIDADE: *</label>
                    <input type="text" name="Sobrenome" id="Sobrenome">
                </div>
            </fieldset>
           <fieldset class="fieldsets">
                <legend>ENDEREÇO</legend>
                <div class="dados_form">
                    <label for="CEP">CEP: *</label>
                    <input type="text" name="CEP" id="CEP">
                    <label for="Logradouro">LOGRADOURO: *</label> 
                    <input type="text" name="Logradouro" id="Logradouro" class="input_rua">
                    <label for="numero">NÚMERO: *</label> 
                    <input type="text" name="numero" id="numero">
                    <label for="complemento">COMPLEMENTO: </label>   
                    <input type="text" name="complemento" id="complemento">
                    <label for="bairro">BAIRRO: *</label>   
                    <input type="text" name="bairro" id="bairro">
                    <label for="cidade">CIDADE: *</label> 
                    <input type="text" name="cidade" id="cidade">
                    <label for="estado">ESTADO: *
                    <select name="estado" id="estado">
                        <option value="">Escolha a opção</option>
                        <option value="PE">PE</option>   
                    </select>
                    </label> 
                    <div class="botoes">
                        <label for="btn-apagar"><input class="btn-apagar" type="reset" name="btn-apagar" id="btn-apagar" value="Limpar"></label>
                        <label for="btn-enviar"><input class="btn-enviar" type="submit" name="btn-enviar" id="btn-enviar"></label> 
                    </div> 
                </div>  
            </fieldset>
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