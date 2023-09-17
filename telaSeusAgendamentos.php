<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Nosso sistema ajuda pacientes a agendar seus respectivos atendimentos nas unidades básicas de sáude de São Lourenço da Mata-PE.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/favicon.ico">
    <link rel="stylesheet" href="CSS/telaSeusAgendamentos.css">
    <title>Seus Agendamento-Expresso Saúde</title>
</head>

<body>
    <header class="header">
        <div class="container-logo">
            <a href="index.php"><img class="logo" src="imagens/logo.png" alt="Logo-Marca-imagem"></a>
        </div>
        <nav>
            <a href="index.php" class="nav_menu">Home</a>
            <a href="" class="nav_menu">Seus Agendamentos</a>
            <a href="" class="nav_menu">Olá, José!</a>    
        </nav>
    </header>
    <main>
        <section class="retangulo_central">
            <div class="historicoAgendamento">
                <h1>HISTÓRICO DE AGENDAMENTO</h1>
                <div class="agenda">
                <details>
                    <summary>Agendamento: 10/04/2021</summary>
                    <p>Especialidade: Clínico Geral</p>
                    <p>Status: Finalizado</p>

                </details>
                <details>
                    <summary>Agendamento: 10/07/2021</summary>
                    <p>Especialidade: Clínico Geral</p>
                    <p>Status: Finalizado</p>
                </details>
                <details>
                    <summary>Agendamento: 10/09/2021</summary>
                    <p>Especialidade: Clínico Geral</p>
                    <p>Status: Finalizado</p>
                </details>
                <details>
                    <summary>Agendamento: 10/01/2022</summary>
                    <p>Especialidade: Clínico Geral</p>
                    <p>Status: Cancelado</p>
                </details>
                </div>
            </div>    
            <div class="form_agendamento">
                <h1>AGENDAMENTO CONFIRMADO</h1>
                <form action="" method="post">
                    <label for="Nome">NOME: <b>Juscelino da Silva Mamede</b></label>
                    <label for="Telefone">TELEFONE:  <b>81 99861-7965</b></label>
                    <label for="E-mail">E-MAIL: <b>juscemamede01@gmail.com</b></label>
                    <label for="SUS">CARTÃO SUS: <b>123654859752</b></label>
                    <label for="Cidade">CIDADE: <b>São lourenço da Mata</b></label>
                    <label for="Bairro">BAIRRO: <b>Capibaribe</b></label>
                    <label for="Unidade">UNIDADE: <b>UBS Umuarama </b></label>
                    <label for="Especialidade">ESPECIALIDADE:<b>Clinico Geral </b></label>
                    <label for="Data">DATA: <b>12/12/2022</b></label>
                    <label for="Hora">HORA: <b>10:00</b></label>
                    <label for="Prioridade">PRIORIDADE: <b>Não</b></label>
                    <input class="btn_confirmar" type="submit" value="Cancelar agendamento" >
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