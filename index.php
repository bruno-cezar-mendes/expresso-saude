<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Nosso sistema ajuda pacientes a agendar seus respectivos atendimentos nas unidades básicas de sáude de São Lourenço da Mata-PE.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/favicon.ico">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Expresso Saúde</title>
</head>

<body>
    <header class="header">
        <div class="container-logo">
            <a href="index.php"><img class="logo" src="imagens/logo.png" alt="Logo-Marca-imagem"></a>
        </div>
        <nav>
            <a href="#servicos_ubs" class="nav_menu">Serviços UBS</a>
            <a href="Login_adm/LoginAdm.php" class="nav_menu">Para gestores</a>
            <a href="#contatos" class="nav_menu">Contato</a>
            <a href="LoginUsuario/loginUsuario.php"><button class="login-btn">Login</button></a>
        </nav>
    </header>
    <main>
        <div class="middle-container">
            <section>
                <div class="manchete">
                    <h1 class="h1-agende">Agende sua consulta na UBS mais próxima de você.</h1>
                    <p>Escolha as opçãoes abaixo para agendar sua consulta no posto destinado ao seu CEP.</p>
                    <button class="btn_agendeAqui"><a href="LoginUsuario/loginUsuario.php">Agende aqui</a></button>
                </div>
            </section>
            <section class="galeria">
                <img class="doc1-img" src="imagens/doc1.png" alt="medica-img">
                <img class="doc1-img" src="imagens/12.png" alt="medico-img">
            </section>
        </div>
        <section class="section_2">

            <div class="servicos">
                <h1 id="servicos_ubs">SERVIÇOS UBS</h1>
                <p class="paragrafo_home">
                    As Unidades Básicas de saúde de São Lourenço da Mata, irão fornecer a população mais carente. 
                    Acesso a atendimentos gratuitos para asespecialidades de Clínico geral e Odontologia. 
                    O objetivo do expresso saúde é fazer com que você não tenha que esperar por uma senha de atendimento 
                    para realizar suia consulta. Ter este acesso é essencial para qualquer cidadão brasileiro.
                    </p>
                <p class="paragrafo_home">
                    As (UBS) são a porta de entrada preferencial do Sistema Único de Saúde
                    (SUS). O objetivo desses postos é atender até 80% dos problemas de saúde da população, sem que haja
                    a necessidade de encaminhamento para outros serviços, como emergências e hospitais.
                </p>    
                <div class="figuras_serviços">
                    <figure>
                        <img class="img-consulta" src="imagens/consulta.jpg" alt="img-consulta">
                        <figcaption>CLÍNICO GERAL</figcaption>
                    </figure>
                    <figure>
                        <img class="img-consulta" src="imagens/dentista1.jpg" alt="img-dentista">
                        <figcaption>ODONTOLOGIA</figcaption>
                    </figure>
                </div>
            </div>
        </section>
    </main>
    <footer class="bottom-container">
        <div class="contact_footer">
            <h3 id="contatos">Contatos Secretaria de Saúde SLM</h3>
            <ul class="list-rodape">
                <li>Telefone: (81) 3299-0302</li>
                <a href="mailto:saude@slm.pe.gov.br" class="nav_menu">
                    <li>E-mail: saude@slm.pe.gov.br</li>
                </a>
            </ul>
        </div>
        <div class="midia_footer">
            <h3 class="h3_midia">Redes Sociais</h3>
            <div class="link_midia">
                <a href="https://www.instagram.com/prefeitura_slm/" target="_blank"><img class="img-insta"
                        src="imagens/insta.png" alt=""></a>
                <a href="https://www.youtube.com/channel/UCPyORbqYNet_3WesxO0vTGw" target="_blank"><img
                        class="img-youtube" src="imagens/youtube.png" alt=""></a>
                <a href="https://www.facebook.com/prefslm/" target="_blank"><img class="img-youtube"
                        src="imagens/face.png" alt=""></a>
            </div>
        </div>

    </footer>
    <p class="copyright">© 2022 Expresso Saúde.</p>

</body>

</html>