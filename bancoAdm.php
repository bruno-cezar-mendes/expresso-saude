<?php
class Banco {

    function getConexao() {
        $link = mysqli_connect("127.0.0.1", "root", "", "db_expressosaude");
        return $link;
    }

    function insertAdmin($nome, $sobrenome, $email, $senha, $id_unidade_saudeFK) {
        $msg = "FALSE";
        $link = $this->getConexao();
        $sql = "INSERT INTO `agente_saude_admin` (`nome`,`sobrenome`,`email`, `senha`, `id_unidade_saudeFK`) VALUES ('$nome', '$sobrenome','$email', '$senha','$id_unidade_saudeFK')";
        
        if (mysqli_query($link, $sql)) {
            $msg = "TRUE";  
        }

        return $msg;
    }

    function isUser($email, $senha) {
        $link = $this->getConexao();

        $sql = "SELECT * FROM agente_saude_admin";
        $result = $link->query($sql);

        while ($row = $result->fetch_assoc()) {
            if (($row['email'] == $email) && ($row['senha'] == $senha)) {
                return $row;
            }
        }

        return FALSE;
    }

    function selectUnidadeSaude() {
        $link = $this->getConexao();

        $sql = "SELECT * FROM unidade_saude";
        $result = $link->query($sql);
        $elementos = array();
        while ($row = $result->fetch_assoc()) {
            $elementos[] = $row;
        }

        return $elementos;
   
    }

    function selectMedico() {
        $link = $this->getConexao();

        $sql = "SELECT * FROM medico";
        $result = $link->query($sql);
        $elementos = array();
        while ($row = $result->fetch_assoc()) {
            $elementos[] = $row;
        }

        return $elementos;
   
    }

   
}


