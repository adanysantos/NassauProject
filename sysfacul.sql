-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Dez-2020 às 00:17
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sysfacul`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamado`
--

CREATE TABLE `chamado` (
  `idChamado` int(11) NOT NULL,
  `tipo_servico` varchar(350) NOT NULL,
  `hora_fechamento` varchar(45) DEFAULT NULL,
  `prioridade` varchar(30) DEFAULT NULL,
  `idTecnico` int(11) DEFAULT NULL,
  `data_abertura` date DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `desc_problema` varchar(255) NOT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `desc_soulucao` varchar(255) DEFAULT NULL,
  `idEquipamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `chamado`
--

INSERT INTO `chamado` (`idChamado`, `tipo_servico`, `hora_fechamento`, `prioridade`, `idTecnico`, `data_abertura`, `estado`, `desc_problema`, `idCliente`, `desc_soulucao`, `idEquipamento`) VALUES
(3, ' Software', NULL, 'Alta', NULL, '2020-10-06', 'Em andamento', 'Testando ', 6, NULL, NULL),
(4, ' Hardware', NULL, 'Leve', 1, '2020-10-06', 'Em andamento', 'tesgheiajajamksnuhdudoxmoxijxmnxmnff ', NULL, NULL, NULL),
(5, ' Hardware', NULL, NULL, NULL, '2020-10-05', NULL, 'Testando data ', NULL, NULL, NULL),
(14, ' Hardware', NULL, NULL, 10, '2020-10-08', 'Fechado', 'Monitor com defeito. ', 5, NULL, NULL),
(15, ' TelecomunicaÃ§Ãµes', NULL, 'Alta', 1, '2020-10-08', 'Fechado', 'Teste. ', 5, NULL, NULL),
(16, ' Software', NULL, NULL, NULL, '2020-10-08', 'Pacote Office. ', 'Pacote Office.', 5, NULL, NULL),
(17, ' Software', NULL, NULL, 1, '2020-10-08', 'Fechado', 'Browser ', 5, NULL, NULL),
(28, 'Telecomunicações', NULL, 'Alta', NULL, '2020-12-07', 'Em andamento', 'Sem redes.', 5, NULL, NULL),
(29, 'Hardware', NULL, 'Média', 15, '2020-12-08', 'Em andamento', 'Gabinete com defeito.', 4, NULL, NULL),
(30, 'Software', NULL, 'Alta', 10, '2020-12-10', 'Em andamento', 'Sistema lento.', 4, NULL, NULL),
(31, 'Hardware', NULL, 'Média', 101, '2020-12-10', 'Em andamento', 'Monitor.', 7, NULL, NULL),
(32, 'Hardware', NULL, 'Alta', 101, '2020-12-10', 'Em andamento', 'Teste..', 8, NULL, NULL),
(33, 'Software', NULL, NULL, 99, NULL, 'Aberto', 'Testando sistema.', NULL, NULL, NULL),
(34, 'Software', NULL, NULL, 99, NULL, 'Aberto', 'Testando..', NULL, NULL, NULL),
(35, 'Outros', NULL, 'Média', 101, NULL, 'Em andamento', 'Testando chamado.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `nome_empresa` varchar(220) NOT NULL,
  `setor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nome`, `email`, `senha`, `telefone`, `nome_empresa`, `setor`) VALUES
(1, 'teste', 'teste@teste.com', '827ccb0eea8a706c4c34a16891f84e7b', '985753651', '', 'Belém'),
(2, 'Daniel', 'daniel@gmail.com', 'daniel', '91985742354', 'DETRAN', 'DTI'),
(3, 'Daniel Costa', 'daniel@gmail.com', 'daniel', '91985421220', '', 'DETRAN'),
(4, 'Lauro Neto', 'lauro@gmail.com', '419ae3359ee05df31b7011a052258eb9', '91983211015', 'UNINASSAU', 'TI'),
(5, 'Amanda Nascimento', 'amada.nascimento@gmail.com', 'amanda', '91984122320', 'DETRAN', 'Desenvolvimento'),
(6, 'Alexandre', 'alexandre1@gmail.com', 'alexandre', '9182256365', 'DETRAN', 'DTI'),
(7, 'Lee', 'lee@gmail.com', 'lee123', '91985723654', 'Creativa', 'TI'),
(8, 'João Novaes', 'joao@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '91985412367', 'DETRAN', 'Desenvolvimento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `computador`
--

CREATE TABLE `computador` (
  `serial_pc` int(11) NOT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `ip` varchar(45) NOT NULL,
  `nome_rede` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento`
--

CREATE TABLE `equipamento` (
  `idEquipamento` int(11) NOT NULL,
  `serial_eq` varchar(45) NOT NULL,
  `garantia` varchar(45) NOT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `qnt_chamado` varchar(30) NOT NULL,
  `modelo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `equipamento`
--

INSERT INTO `equipamento` (`idEquipamento`, `serial_eq`, `garantia`, `idCliente`, `qnt_chamado`, `modelo`) VALUES
(1, '00e36e65e00e', '1 ano', 1, '2', 'HP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gestor`
--

CREATE TABLE `gestor` (
  `idGestor` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `gestor`
--

INSERT INTO `gestor` (`idGestor`, `nome`, `cpf`, `telefone`, `email`, `senha`) VALUES
(1, 'John Junior', '03640792238', '91985720017', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Alexandre', '47841012398', '9187456321', 'alexandre@gmail.com', '3d65fd70d95a4edfe9555d0ebeca2b17'),
(3, 'John Charlles', '03640792238', '9185720017', 'johnc@gmail.com', 'f09696910bdd874a99cd74c8f05b5c44'),
(5, 'Anderson Goes', '78945612330', '91982122365', 'anderson@gmail.com ', 'anderson10'),
(7, 'Raphael', '12345698778', '91982366554', 'raphael@gmail.com', '12345'),
(8, 'Teste', '12312312399', '9199999999', 'teste@teste.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnico`
--

CREATE TABLE `tecnico` (
  `idTecnico` int(11) NOT NULL,
  `nome_tecnico` varchar(200) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `area_atuacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tecnico`
--

INSERT INTO `tecnico` (`idTecnico`, `nome_tecnico`, `email`, `senha`, `cpf`, `telefone`, `area_atuacao`) VALUES
(1, 'John', 'john@gmail.com', '', '03640792238', '985542398', 'Software'),
(9, 'Amanda', 'amanda@gmail.com', 'amanda', '12345678963', '91987423065', 'Software'),
(10, 'Felipe Figueiredo', 'felipe@gmail.com', '12345', '4578541020', '91985411326', 'Hardware'),
(11, 'Felipe Figueiredo', 'felipe@gmail.com', '12345', '17272858249', '984523698', 'Hardware'),
(12, 'Felipe Figueiredo', 'felipe@gmail.com', '12345', '17272858249', '985231412', 'Hardware'),
(15, 'Alexandre Santana', 'alexandre@hotmail.com', 'alexandre11', '12345678996', '91985623114', 'Software'),
(99, 'Sem Técnico', 'sem@gmail.com', '', '00000000000', '000000000000', 'Nulo'),
(100, 'Werllen', 'werllen@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '12365478941', '91982365474', 'Software'),
(101, 'Raphael', 'raphael@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '12345698711', '91984123654', 'Hardware');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `chamado`
--
ALTER TABLE `chamado`
  ADD PRIMARY KEY (`idChamado`),
  ADD KEY `idTecnico` (`idTecnico`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idEquipamento` (`idEquipamento`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `computador`
--
ALTER TABLE `computador`
  ADD PRIMARY KEY (`serial_pc`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Índices para tabela `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`idEquipamento`),
  ADD KEY `fk_clienteEquipamento` (`idCliente`);

--
-- Índices para tabela `gestor`
--
ALTER TABLE `gestor`
  ADD PRIMARY KEY (`idGestor`);

--
-- Índices para tabela `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`idTecnico`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chamado`
--
ALTER TABLE `chamado`
  MODIFY `idChamado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `equipamento`
--
ALTER TABLE `equipamento`
  MODIFY `idEquipamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `gestor`
--
ALTER TABLE `gestor`
  MODIFY `idGestor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tecnico`
--
ALTER TABLE `tecnico`
  MODIFY `idTecnico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `chamado`
--
ALTER TABLE `chamado`
  ADD CONSTRAINT `chamado_ibfk_1` FOREIGN KEY (`idTecnico`) REFERENCES `tecnico` (`idTecnico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chamado_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chamado_ibfk_3` FOREIGN KEY (`idEquipamento`) REFERENCES `equipamento` (`idEquipamento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `computador`
--
ALTER TABLE `computador`
  ADD CONSTRAINT `computador_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
