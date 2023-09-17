<?php
class Banco {

    function getConexao() {
        $link = mysqli_connect("127.0.0.1", "root", "", "db_expressosaude");
        return $link;
    }

    function insertUsuario($nome, $sobrenome, $cpf, $cartsus, $datanascimento, $email, $sexo, $endereco, $senha) {
        $msg = "FALSE";
        $link = $this->getConexao();
        $sql = "INSERT INTO `paciente` (`nome`,`sobrenome`, `cpf`, `cartsus`, `datanascimento`, `email`, `sexo`, `endereco`, `senha`) VALUES ('$nome', '$sobrenome', '$cpf', '$cartsus', '$datanascimento', '$email', '$sexo', '$endereco', '$senha')";
        
        if (mysqli_query($link, $sql)) {
            $msg = "TRUE";  
        }

        return $msg;
    }

    function isUser($email, $senha) {
        $link = $this->getConexao();

        $sql = "SELECT * FROM paciente";
        $result = $link->query($sql);

        while ($row = $result->fetch_assoc()) {
            if (($row['email'] == $email) && ($row['senha'] == $senha)) {
                return $row;
            }
        }

        return FALSE;
    }
   
}


