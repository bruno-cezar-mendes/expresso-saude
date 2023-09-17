<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Nosso sistema ajuda pacientes a agendar seus respectivos atendimentos nas unidades básicas de sáude de São Lourenço da Mata-PE.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/favicon.ico">
    <link rel="stylesheet" href="CSS/cadastro.css">
    <title>Cadastro-Expresso Saúde</title>
</head>

<body>
    <header class="header">
        <div class="container-logo">
            <a href="index.php"><img class="logo" src="imagens/logo.png" alt="Logo-Marca-imagem"></a>
        </div>
        <nav>
            <a href="index.php" class="nav_menu">HOME</a>
            <a href="LoginUsuario/loginUsuario.php"><button class="login-btn">Login</button></a>
        </nav>
    </header>
    <main>
        <h1>CADASTRO DE USUÁRIO</h1>
        <form action="validar.php" method="post">
            <fieldset class="fieldsets">
                <legend>DADOS PESSOAIS</legend>
                <div class="Dados_form">
                    <div class="coluna1_form">
                        <label for="Nome">NOME: *<input type="text" name="nome" id="Nome"></label>
                    </div>
                    <div class="coluna2_form">
                        <label for="Sobrenome">SOBRENOME: *<input type="text" name="sobrenome" id="Sobrenome"></label> 
                        
                    </div>
                    <div class="coluna3_form">
                        <label for="DataNascimento">DATA DE NASCIMENTO: *<input type="date" name="datanascimento" id="DataNascimento"></label>
                    </div>
                    <div class="coluna4_form"> 
                        <label for="Sexo">SEXO: *</label>
                        <label for="Sexo"><input class="inline" type="radio" name="sexo" id="SexoM"> Masculino</label>
                        <label for="Sexo"><input class="inline" type="radio" name="sexo" id="SexoF"> Feminino</label>
                    </div>
                </div>
                <div class="Dados_form">
                    <div class="coluna1_form">
                        <label for="CPF">CPF: *<input type="text" name="cpf" id="CPF"></label> 
                    </div>
                    <div class="coluna2_form">
                        <label for="CartaoSus">CARTÃO SUS: *<input type="text" name="cartsus" id="CartaoSus"></label>   
                    </div>
                    
                    
                </div>   
                
            </fieldset>
            <fieldset class="fieldsets">
                <legend>ENDEREÇO</legend>
                <div class="Dados_form">
                    <div class="coluna1_form">
                        <label for="CEP">CEP: *<input type="text" name="cep" id="CEP"></label>
                    </div>    
                </div>
                <div class="Dados_form">
                    <div class="coluna1_form">
                        <label for="Logradouro">LOGRADOURO: *<input type="text" name="logradouro" id="Logradouro" class="input_rua"></label> 
                    </div>
                </div>
                <div class="Dados_form">
                    <div class="coluna1_form">
                        <label for="numero">NÚMERO: *<input type="text" name="numero" id="numero"></label> 
                    </div>
                    <div class="coluna2_form">
                        <label for="complemento">COMPLEMENTO: <input type="text" name="complemento" id="complemento"></label>   
                    </div>
                    <div class="coluna3_form">
                        <label for="bairro">BAIRRO: *<input type="text" name="bairro" id="bairro"></label>   
                    </div> 
                    </div>
                </div>
                <div class="Dados_form">
                    <div class="coluna1_form">
                        <label for="cidade">CIDADE: *<input type="text" name="cidade" id="cidade"></label> 
                    </div>
                    <div class="coluna2_form">
                        <label for="estado">ESTADO: *
                            <select name="estado" id="estado">
                                <option value="">Escolha a opção</option>
                                <option value="PE">PE</option>   
                            </select>
                        </label>   
                    </div>
                    
                </div>     
                
            </fieldset>
            <fieldset class="fieldsets">
                <legend>DADOS LOGIN</legend>
                <div class="Dados_form">
                    <div class="coluna1_form">
                        <label for="e-mail">E-MAIL: *<input type="email" name="email" id="e-mail"></label>
                    </div>
                    
                    
                </div>
                <div class="Dados_form">
                    <div class="coluna1_form">
                        <label for="senha">SENHA: *<input type="password" name="senha" id="senha"></label> 
                    </div>
                    
                      
                </div> 
                <div class="Dados_form">
                    <div class="coluna1_form">
                        <label for="senha_confirm">DIGITE NOVAMENTE A SENHA: *<input type="password" name="senha_confirm" id="senha_confirm"></label> 
                    </div> 
                    <div class="coluna4_form"> 
                        
                        <label for="btn-apagar"><input class="btn-apagar" type="reset" name="btn-apagar" id="btn-apagar" value="Limpar"></label>
                        <label for="btn-enviar"><input class="btn-enviar" type="submit" name="Sexo" id="SexoF"></label>
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