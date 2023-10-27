-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/10/2023 às 02:10
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `finibol`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `expedicao`
--

CREATE TABLE `expedicao` (
  `idexpedicao` int(10) UNSIGNED NOT NULL,
  `idsetores` int(10) UNSIGNED NOT NULL,
  `quemEnviouPExp` varchar(45) NOT NULL,
  `expedidor` varchar(45) NOT NULL,
  `transportadora` varchar(45) NOT NULL,
  `destino` varchar(45) NOT NULL,
  `dataChegadaExp` datetime NOT NULL,
  `dataExp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `recebimento`
--

CREATE TABLE `recebimento` (
  `idrecebimento` int(10) UNSIGNED NOT NULL,
  `idsetores` int(10) UNSIGNED NOT NULL,
  `nomeRecebedorRec` varchar(45) NOT NULL,
  `transportadora` varchar(45) NOT NULL,
  `produto` varchar(45) NOT NULL,
  `quantidade` varchar(45) NOT NULL,
  `solicitante` varchar(45) NOT NULL,
  `dataRecebimento` datetime NOT NULL,
  `enviado` char(1) NOT NULL DEFAULT 'N',
  `dataEnvioPSetores` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `setores`
--

CREATE TABLE `setores` (
  `idsetores` int(10) UNSIGNED NOT NULL,
  `setores` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `setores`
--

INSERT INTO `setores` (`idsetores`, `setores`) VALUES
(1, 'Produtos Pequeno'),
(2, 'Produtos Médios'),
(3, 'Produtos Grandes');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(10) UNSIGNED NOT NULL,
  `idsetores` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `cargo` enum('usuario_comum','administrador') NOT NULL,
  `cadastro` datetime DEFAULT NULL,
  `ativo` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `idsetores`, `usuario`, `senha`, `cargo`, `cadastro`, `ativo`) VALUES
(2, 1, 'Rafael Fagundes', 'rafaelfagundes762', 'administrador', '2023-10-25 20:49:00', 'A'),
(3, 1, 'LCP', '123', 'usuario_comum', NULL, 'A');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `expedicao`
--
ALTER TABLE `expedicao`
  ADD PRIMARY KEY (`idexpedicao`,`idsetores`);

--
-- Índices de tabela `recebimento`
--
ALTER TABLE `recebimento`
  ADD PRIMARY KEY (`idrecebimento`,`idsetores`),
  ADD KEY `FK_setores_1` (`idsetores`);

--
-- Índices de tabela `setores`
--
ALTER TABLE `setores`
  ADD PRIMARY KEY (`idsetores`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`,`idsetores`),
  ADD KEY `FK_idsetores_1` (`idsetores`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `expedicao`
--
ALTER TABLE `expedicao`
  MODIFY `idexpedicao` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `recebimento`
--
ALTER TABLE `recebimento`
  MODIFY `idrecebimento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `setores`
--
ALTER TABLE `setores`
  MODIFY `idsetores` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `recebimento`
--
ALTER TABLE `recebimento`
  ADD CONSTRAINT `FK_setores_1` FOREIGN KEY (`idsetores`) REFERENCES `setores` (`idsetores`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_idsetores_1` FOREIGN KEY (`idsetores`) REFERENCES `setores` (`idsetores`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
