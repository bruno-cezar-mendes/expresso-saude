<?php
    session_start();
    include_once 'bancoAdm.php';
    $conexao = new Banco();
    $resultado = $conexao->selectUnidadeSaude();
    $resultMedico = $conexao->selectMedico();
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
    <link rel="stylesheet" href="CSS/telaAgendamento.css">
    <title>Agendamento-Expresso Saúde</title>
</head>

<body>
    <header class="header">
        <div class="container-logo">
            <a href="index.php"><img class="logo" src="imagens/logo.png" alt="Logo-Marca-imagem"></a>
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
                <img src="imagens/dentista2.jpg" alt="foto_Agendamento" class="foto_agendamento">
            </div>
            <div class="form_agendamento">
                <h1>AGENDE SUA CONSULTA AQUI</h1>
                <form action="telaConfirmarAgendamento.php" method="post">
                    <label for="Cidade">CIDADE *</label>
                    <select name="Cidade" id="Cidade">
                            <option value="Escolha">Escolha a opção</option>
                            <?php
                                 $city = array();   
                                 foreach ($resultado as $unidade){
                                    $cidade = explode(";", $unidade['endereco']);
                                    $teste = 0;
                                    
                                    foreach ($city as $unity){
                                       if ($unity === $cidade[5]){
                                           $teste = 1;
                                       } 
                                    }
                                    if($teste === 0){
                                        echo('<option value="'.$unidade['id_unidade_saudePK'].'" >'.$cidade[5].'</option>');
                                        $city[] = $cidade[5];
                                    }   
                                 }
                            ?>  
                        </select>
                    <label for="bairro">BAIRRO *
                    <select name="bairro" id="bairro">
                            <option value="Escolha">Escolha a opção</option>
                            <?php
                                 $bairro1 = array();   
                                 foreach ($resultado as $unidade){
                                    $bairro = explode(";", $unidade['endereco']);
                                    $teste = 0;
                                    
                                    foreach ($bairro1 as $unity){
                                       if ($unity === $bairro[4]){
                                           $teste = 1;
                                       } 
                                    }
                                    if($teste === 0){
                                        echo('<option value="'.$unidade['id_unidade_saudePK'].'" >'.$bairro[4].'</option>');
                                        $bairro1[] = $bairro[4];
                                    }   
                                 }
                            ?>  
                        </select>
                    </label>
                    <label for="unidade">UNIDADE *</label>
                    <select name="unidade" id="unidade">
                    <option value="Escolha">Escolha a opção</option>
                            <?php
                                 $posto1 = array();   
                                 foreach ($resultado as $unidade){
                                    $posto = explode(";", $unidade['nome']);
                                    $teste = 0;
                                    
                                    foreach ($posto1 as $unity){
                                       if ($unity === $posto[0]){
                                           $teste = 1;
                                       } 
                                    }
                                    if($teste === 0){
                                        echo('<option value="'.$unidade['id_unidade_saudePK'].'" >'.$posto[0].'</option>');
                                        $posto1[] = $posto[0];
                                    }   
                                 }
                            ?>  
                        </select>
                    <label for="especialidade">ESPECIALIDADE *</label>
                    <select name="especialidade" id="especialidade">
                            <option value="Escolha">Escolha a opção</option>
                            <?php
                                 $especialidade1 = array();   
                                 foreach ($resultMedico as $unidade){
                                    $especialidade = explode(";", $unidade['especialidade']);
                                    $teste = 0;
                                    
                                    foreach ($especialidade1 as $unity){
                                       if ($unity === $especialidade[0]){
                                           $teste = 1;
                                       } 
                                    }
                                    if($teste === 0){
                                        echo('<option value="'.$unidade['id_medico'].'" >'.$especialidade[0].'</option>');
                                        $especialidade1 = $especialidade[0];
                                    }   
                                 }
                            ?>  
                        </select>
                    
                    <label for="Data">DATA * <input type="date" name="Data" id="Data"></label>
                    <label for="Hora">HORA * <input type="time" name="hora" id="hora"></label>
                    <label class="checkbox_form" for="prioridade"><input class="checkbox_icon" type="checkbox"
                            name="prioridade" id="prioridade">
                        Atendimento prioritário?
                    </label>
                    <p><em>LEI 10048 <br>
                        Art. 1o As pessoas portadoras de deficiência física, os idosos com idade igual ou superior a
                        sessenta e cinco anos, as gestantes, as lactantes e as pessoas acompanhadas por crianças de colo
                        terão atendimento prioritário, nos termos desta Lei.</em></p>
                    <input class="btn_agendar" type="submit" value="AGENDAR">
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