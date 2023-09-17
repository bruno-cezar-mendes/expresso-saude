-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Set-2023 às 18:04
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_expressosaude`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agente_saude_admin`
--

CREATE TABLE `agente_saude_admin` (
  `id_unidade_admin` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `id_unidade_saudeFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `agente_saude_admin`
--

INSERT INTO `agente_saude_admin` (`id_unidade_admin`, `nome`, `sobrenome`, `email`, `senha`, `id_unidade_saudeFK`) VALUES
(1, 'Thais', 'Belo', 'thais41@gmail.com', '123456', 1),
(51, 'julia', 'belo', 'bvkdjfbvkdsj@gmail.com', 'sdlvjdnsfgkjvdn', 1),
(52, 'tabuao', 'serra', 'tabuao@gmail.com', '3216524', 1),
(53, 'Bruno', 'Roberto', 'jk@gmail.com', '123546', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `id_consultaPK` int(11) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `unidade` varchar(30) NOT NULL,
  `especialidade` varchar(20) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `id_pacienteFK` int(11) NOT NULL,
  `id_medicoFK` int(11) NOT NULL,
  `id_unidade_saudeFK` int(11) NOT NULL,
  `cod_statusFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `id_medico` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `crm` varchar(20) NOT NULL,
  `especialidade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`id_medico`, `nome`, `sobrenome`, `dt_nascimento`, `sexo`, `crm`, `especialidade`) VALUES
(1, 'Oscar', 'Bandeira', '1992-12-09', 'M', '18584', 'Clinico Geral'),
(2, 'Pedro ', 'Accuioly', '1983-12-22', 'M', '1769', 'Clínico Geral');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico_unidade_saude`
--

CREATE TABLE `medico_unidade_saude` (
  `id_medico` int(11) NOT NULL,
  `id_unidade_saude` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `idpaciente` int(11) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `sobrenome` varchar(30) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `cartsus` int(11) DEFAULT NULL,
  `datanascimento` date DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`idpaciente`, `nome`, `sobrenome`, `cpf`, `cartsus`, `datanascimento`, `email`, `sexo`, `endereco`, `senha`) VALUES
(1, 'Juscelino', 'Mamede', '87554127268', 123456789, '1985-05-22', 'juscemamede01@gmail.com', 'M', '53433010;Rua Sebastiao amaral;1465;casa 102;Pau amarelo;Paulista;PE;\r\n', '123456'),
(6, 'julia', 'belo', '32145698745', 1236544125, '2014-04-01', 'julia@gmail.com', 'o', '58516;rua fatima;102;casa 21;nuleu urbano;serra dos cks;PE', '010203'),
(7, 'virgulino', 'preriasd', '13213646548', 3131654, '2022-12-02', 'virg@gmail.com', 'o', '58515000;rua feijao preto;1420;loja1;bairro da paz;parauapebas;PE', '121212'),
(8, 'Pedro ', 'Mendes', '63552441522', 254123, '2023-06-08', 'pedro@gmail.com', 'o', '53433010;rua parnamirim;2589;;centro;Paulista;PE', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `cod_status` int(11) NOT NULL,
  `descrição` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`cod_status`, `descrição`) VALUES
(1, 'Cancelado'),
(2, 'Agendado'),
(3, 'Finalizado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidade_saude`
--

CREATE TABLE `unidade_saude` (
  `id_unidade_saudePK` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `endereco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `unidade_saude`
--

INSERT INTO `unidade_saude` (`id_unidade_saudePK`, `nome`, `telefone`, `endereco`) VALUES
(1, 'UBS Chã Da Tábua', '(81)35254844', '54740030;Avenida Oito de Maio;1114;;Capibaribe;São Lourenço da Mata; PE'),
(2, 'Unidade de Saúde da ', '(81) 3525-0388', '54720-320;Rua Central;452;;Muribara;São Lourenço da Mata;PE');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agente_saude_admin`
--
ALTER TABLE `agente_saude_admin`
  ADD PRIMARY KEY (`id_unidade_admin`),
  ADD KEY `id_unidade_saudeFK` (`id_unidade_saudeFK`);

--
-- Índices para tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_consultaPK`),
  ADD KEY `FK_id_status` (`cod_statusFK`),
  ADD KEY `FK_id_paciente` (`id_pacienteFK`),
  ADD KEY `FK-id_medico` (`id_medicoFK`),
  ADD KEY `FK_id_unidade_saude` (`id_unidade_saudeFK`);

--
-- Índices para tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id_medico`);

--
-- Índices para tabela `medico_unidade_saude`
--
ALTER TABLE `medico_unidade_saude`
  ADD KEY `FK_id_medico` (`id_medico`),
  ADD KEY `FK_id_udidade_saude` (`id_unidade_saude`);

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idpaciente`);

--
-- Índices para tabela `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`cod_status`);

--
-- Índices para tabela `unidade_saude`
--
ALTER TABLE `unidade_saude`
  ADD PRIMARY KEY (`id_unidade_saudePK`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agente_saude_admin`
--
ALTER TABLE `agente_saude_admin`
  MODIFY `id_unidade_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de tabela `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consultaPK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `medico`
--
ALTER TABLE `medico`
  MODIFY `id_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idpaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `unidade_saude`
--
ALTER TABLE `unidade_saude`
  MODIFY `id_unidade_saudePK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agente_saude_admin`
--
ALTER TABLE `agente_saude_admin`
  ADD CONSTRAINT `id_unidade_saudeFK` FOREIGN KEY (`id_unidade_saudeFK`) REFERENCES `unidade_saude` (`id_unidade_saudePK`);

--
-- Limitadores para a tabela `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `FK-id_medico` FOREIGN KEY (`id_medicoFK`) REFERENCES `medico` (`id_medico`),
  ADD CONSTRAINT `FK_id_paciente` FOREIGN KEY (`id_pacienteFK`) REFERENCES `paciente` (`idpaciente`),
  ADD CONSTRAINT `FK_id_status` FOREIGN KEY (`cod_statusFK`) REFERENCES `status` (`cod_status`),
  ADD CONSTRAINT `FK_id_unidade_saude` FOREIGN KEY (`id_unidade_saudeFK`) REFERENCES `unidade_saude` (`id_unidade_saudePK`);

--
-- Limitadores para a tabela `medico_unidade_saude`
--
ALTER TABLE `medico_unidade_saude`
  ADD CONSTRAINT `FK_id_medico` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_medico`),
  ADD CONSTRAINT `FK_id_udidade_saude` FOREIGN KEY (`id_unidade_saude`) REFERENCES `unidade_saude` (`id_unidade_saudePK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
