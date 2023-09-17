<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Nosso sistema ajuda pacientes a agendar seus respectivos atendimentos nas unidades básicas de sáude de São Lourenço da Mata-PE.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/favicon.ico">
    <link rel="stylesheet" href="CSS/telaConfirmarAgendamento.css">
    <title>Confirmar Agendamento-Expresso Saúde</title>
</head>

<body>
    <header class="header">
        <div class="container-logo">
            <a href="index.html"><img class="logo" src="imagens/logo.png" alt="Logo-Marca-imagem"></a>
        </div>
        <nav>
            <a href="index.php" class="nav_menu">Home</a>
            <a href="telaSeusAgendamentos.php" class="nav_menu">Seus Agendamentos</a>
            <a href="" class="nav_menu">Olá, Juscelino!</a>    
        </nav>
    </header>
    <main>
        <section class="retangulo_central">
            <div class="foto_retangulo">
                <img src="imagens/doc2.jpg" alt="foto_Agendamento" class="foto_agendamento">
            </div>
            <div class="form_agendamento">
                <h1>CONFIRA SEUS DADOS E CONFIRME O AGENDAMENTO</h1>
                <form action="telaSenhaAgendamento.php" method="post" class="form1">
                    <label for="Nome"><b>NOME:</b> Juscelino da Silva Mamede</label>
                    <label for="Telefone"><b>TELEFONE:</b> 81 99861-7965</label>
                    <label for="E-mail"><b>E-MAIL:</b> juscemamede01@gmail.com</label>
                    <label for="SUS"><b>CARTÃO SUS:</b> 1235264352</label>
                    <label for="Cidade"><b>CIDADE:</b> São Lourenço da Mata</label>
                    <label for="Bairro"><b>BAIRRO:</b> Capibaribe</label>
                    <label for="Unidade"><b>UNIDADE:</b> UBS Chã Da Tábua</label>
                    <label for="Especialidade"><b>ESPECIALIDADE:</b> Clínico Geral</label>
                    <label for="Data"><b>DATA:</b> 12/12/2022</label>
                    <label for="Hora"><b>HORA:</b> 08:00</label>
                    <label for="Prioridade"><b>PRIORIDADE:</b> Não</label>
                    <input class="btn_confirmar" type="submit" value="Confirmar" >
                </form>
            </div>

        </section>
    </main>
    <footer class="bottom-container">
        <div class="contact_footer">
            <h3>Contatos Secretaria de Saúde SLM</h3>
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