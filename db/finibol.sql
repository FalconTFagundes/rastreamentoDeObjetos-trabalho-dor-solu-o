-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31/10/2023 às 02:22
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
-- Estrutura para tabela `almoxarife`
--

CREATE TABLE `almoxarife` (
  `idalmoxarife` int(11) NOT NULL,
  `transportadora` varchar(45) NOT NULL,
  `produto` varchar(45) NOT NULL,
  `quantsolicitada` int(11) NOT NULL,
  `quantentregue` int(11) NOT NULL,
  `setor` varchar(45) NOT NULL,
  `solicitante` varchar(45) NOT NULL,
  `baixaprod` int(11) NOT NULL,
  `observacao` longtext DEFAULT NULL,
  `alteracao` date NOT NULL,
  `cadastro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `almoxarife`
--

INSERT INTO `almoxarife` (`idalmoxarife`, `transportadora`, `produto`, `quantsolicitada`, `quantentregue`, `setor`, `solicitante`, `baixaprod`, `observacao`, `alteracao`, `cadastro`) VALUES
(1, 'Transportadora 3', 'amortecedor', 1000, 97, 'Setor 1', 'tu', 0, 'vvvvc', '0000-00-00', '2023-10-29 23:25:26'),
(2, 'Transportadora 1', 'carburador', 400, 166, 'Setor 2', 'ele', 0, 'teste', '0000-00-00', '2023-10-29 23:24:04'),
(3, 'Transportadora 2', 'carburador', 1000, 166, 'Setor 3', 'ele', 0, 'teste', '0000-00-00', '2023-10-29 23:24:04');

-- --------------------------------------------------------

--
-- Estrutura para tabela `components`
--

CREATE TABLE `components` (
  `idcomponents` int(11) NOT NULL,
  `produto` varchar(45) NOT NULL,
  `quantentregue` varchar(45) NOT NULL,
  `datarecebimento` varchar(45) NOT NULL,
  `resprecebimento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `components`
--

INSERT INTO `components` (`idcomponents`, `produto`, `quantentregue`, `datarecebimento`, `resprecebimento`) VALUES
(1, 'Painel (Nissan Versa-2020)', '360', '2023-10-24', 'teste'),
(2, 'Banco (corolla-2022)', '390', '2023-10-31', 'teste');

-- --------------------------------------------------------

--
-- Estrutura para tabela `expedicao`
--

CREATE TABLE `expedicao` (
  `idexpedicao` int(11) NOT NULL,
  `produto` varchar(45) NOT NULL,
  `quantentregue` varchar(45) NOT NULL,
  `setorexped` varchar(45) NOT NULL,
  `dataexped` date NOT NULL,
  `respexped` varchar(45) NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `expedicao`
--

INSERT INTO `expedicao` (`idexpedicao`, `produto`, `quantentregue`, `setorexped`, `dataexped`, `respexped`, `alteracao`) VALUES
(1, 'Produto 3', '50', 'Setor 2', '2023-10-31', 'eu', '0000-00-00 00:00:00'),
(2, 'Produto 3', '400', 'Setor 2', '2023-12-26', 'eu', '2023-10-27 09:47:52'),
(3, 'Produto 2', '50', 'Setor 2', '2023-10-25', 'eu', '2023-10-27 09:56:12'),
(4, 'Porta de corolla 2021', '49', 'Setor 2', '2023-10-31', 'eu', '2023-10-29 14:52:34');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pecas`
--

CREATE TABLE `pecas` (
  `idpecas` int(11) NOT NULL,
  `produto` varchar(45) NOT NULL,
  `quantentregue` varchar(45) NOT NULL,
  `datarecebpecas` date NOT NULL,
  `resprecebpecas` varchar(45) NOT NULL,
  `alteracao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pecas`
--

INSERT INTO `pecas` (`idpecas`, `produto`, `quantentregue`, `datarecebpecas`, `resprecebpecas`, `alteracao`) VALUES
(1, 'Produto 3', '19', '2023-10-20', 'tu', '0000-00-00 00:00:00'),
(2, 'Produto 3', '19', '2023-10-20', 'tu', '0000-00-00 00:00:00'),
(3, 'Produto 2', '79', '2023-10-31', 'tu', '0000-00-00 00:00:00'),
(4, 'pedal do acelerador(fox-2023)', '999', '2023-10-24', 'tu', '0000-00-00 00:00:00'),
(5, 'amortecedor', '999', '2023-10-31', 'tu', '0000-00-00 00:00:00'),
(6, 'farol', '999', '2023-10-24', 'tu', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `prodfinal`
--

CREATE TABLE `prodfinal` (
  `idprodfinal` int(11) NOT NULL,
  `produto` varchar(45) NOT NULL,
  `quantentregue` varchar(45) NOT NULL,
  `datarecprod` varchar(45) NOT NULL,
  `resprecprodfinal` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `prodfinal`
--

INSERT INTO `prodfinal` (`idprodfinal`, `produto`, `quantentregue`, `datarecprod`, `resprecprodfinal`) VALUES
(1, 'Polo 2024', '399', '2023-10-24', 'eu'),
(2, 'Toyota Hillux 2021', '50', '2023-10-17', 'eu');

-- --------------------------------------------------------

--
-- Estrutura para tabela `saidacomponents`
--

CREATE TABLE `saidacomponents` (
  `idsaidacomponents` int(11) NOT NULL,
  `prodcomponents` varchar(45) NOT NULL,
  `quantcomponents` varchar(45) NOT NULL,
  `dataenvcomponents` date NOT NULL,
  `respenvcomponents` varchar(45) NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `saidaexpedicao`
--

CREATE TABLE `saidaexpedicao` (
  `idsaidaexpedicao` int(11) NOT NULL,
  `prodexpedsaida` varchar(45) NOT NULL,
  `setor_resp` varchar(45) NOT NULL,
  `dataenvexp` date NOT NULL,
  `quantprodenv` varchar(45) NOT NULL,
  `respenvprod` varchar(45) NOT NULL,
  `destinoenvprod` varchar(45) NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `saidapecas`
--

CREATE TABLE `saidapecas` (
  `idsaidapecas` int(11) NOT NULL,
  `prodsaidapecas` varchar(45) NOT NULL,
  `quantsaidapecas` varchar(45) NOT NULL,
  `dataenvpecas` date NOT NULL,
  `respenvpecas` varchar(45) NOT NULL,
  `setorenv` varchar(45) NOT NULL,
  `obsenv` longtext NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `saidapecas`
--

INSERT INTO `saidapecas` (`idsaidapecas`, `prodsaidapecas`, `quantsaidapecas`, `dataenvpecas`, `respenvpecas`, `setorenv`, `obsenv`, `alteracao`) VALUES
(1, 'Produto 3', '30', '2023-10-30', 'eu', '', '', '2023-10-29 04:45:33'),
(2, 'Produto 3', '30', '2023-10-30', 'eu', '', '', '2023-10-29 04:46:23'),
(3, 'Produto 3', '30', '2023-10-31', 'eu', '', '', '2023-10-29 04:55:17'),
(4, 'Produto 2', '1', '2023-10-30', 'eu', '', '', '2023-10-29 04:56:25'),
(5, 'Produto 3', '1', '2023-10-30', 'eu', '', '', '2023-10-29 04:57:37'),
(6, 'amortecedor', '1', '2023-10-24', 'eu', '', '', '2023-10-29 05:06:35'),
(7, 'farol', '1', '2023-10-16', 'eu', '', '', '2023-10-29 05:07:22'),
(8, 'pedal do acelerador(fox-2023)', '1', '2023-10-19', 'eu', '', '', '2023-10-29 05:08:01');

-- --------------------------------------------------------

--
-- Estrutura para tabela `saidaprodfinal`
--

CREATE TABLE `saidaprodfinal` (
  `idsaidaprodfinal` int(11) NOT NULL,
  `prodfinalsaida` varchar(45) NOT NULL,
  `quantprodfinal` varchar(45) NOT NULL,
  `datasaidaprodfinal` date NOT NULL,
  `respenvprodfinal` varchar(45) NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `saida_almoxarife`
--

CREATE TABLE `saida_almoxarife` (
  `idsaida_almoxarife` int(11) NOT NULL,
  `produto` varchar(45) NOT NULL,
  `quantsaida` int(11) NOT NULL,
  `datasaida` date NOT NULL,
  `respsaida` varchar(45) NOT NULL,
  `setorsaida` varchar(45) NOT NULL,
  `obsvsaida` longtext NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `saida_almoxarife`
--

INSERT INTO `saida_almoxarife` (`idsaida_almoxarife`, `produto`, `quantsaida`, `datasaida`, `respsaida`, `setorsaida`, `obsvsaida`, `alteracao`) VALUES
(1, 'amortecedor', 1, '2023-10-19', 'eu', 'Setor 1', 'ssdsd', '2023-10-28 21:38:04'),
(2, 'amortecedor', 1, '2023-10-24', 'eu', 'Setor 1', 'eerrre', '2023-10-28 21:38:37'),
(3, 'amortecedor', 1, '2023-10-10', 'ele', 'Setor 2', 'asa', '2023-10-29 03:27:31'),
(4, 'carburador', 10, '2023-10-24', 'eu', 'Setor 2', 'teste', '2023-10-29 23:22:02'),
(5, 'carburador', 1, '2023-10-24', 'ele', 'Setor 2', 'teste', '2023-10-29 23:22:43'),
(6, 'carburador', 10, '2023-10-18', 'ele', 'Setor 3', 'teste', '2023-10-29 23:23:18'),
(7, 'carburador', 200, '2023-10-24', 'ele', 'Setor 2', 'teste', '2023-10-29 23:24:04'),
(8, 'amortecedor', 900, '2023-10-19', 'euasa', 'Setor 1', 'teste', '2023-10-29 23:25:26');

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
(1, 'Almoxarife'),
(2, 'Peças'),
(3, 'Componentes'),
(4, 'Produto Final'),
(5, 'Expedição');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(10) UNSIGNED NOT NULL,
  `idsetores` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(90) NOT NULL,
  `cargo` enum('gerente','administrador') NOT NULL,
  `cadastro` datetime DEFAULT NULL,
  `ativo` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `idsetores`, `usuario`, `senha`, `cargo`, `cadastro`, `ativo`) VALUES
(2, 1, 'Rafael Fagundes', 'rafaelfagundes762', 'administrador', '2023-10-25 20:49:00', 'A'),
(3, 2, 'LCP', '123', 'gerente', NULL, 'A');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `almoxarife`
--
ALTER TABLE `almoxarife`
  ADD PRIMARY KEY (`idalmoxarife`);

--
-- Índices de tabela `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`idcomponents`);

--
-- Índices de tabela `expedicao`
--
ALTER TABLE `expedicao`
  ADD PRIMARY KEY (`idexpedicao`);

--
-- Índices de tabela `pecas`
--
ALTER TABLE `pecas`
  ADD PRIMARY KEY (`idpecas`);

--
-- Índices de tabela `prodfinal`
--
ALTER TABLE `prodfinal`
  ADD PRIMARY KEY (`idprodfinal`);

--
-- Índices de tabela `saidacomponents`
--
ALTER TABLE `saidacomponents`
  ADD PRIMARY KEY (`idsaidacomponents`);

--
-- Índices de tabela `saidaexpedicao`
--
ALTER TABLE `saidaexpedicao`
  ADD PRIMARY KEY (`idsaidaexpedicao`);

--
-- Índices de tabela `saidapecas`
--
ALTER TABLE `saidapecas`
  ADD PRIMARY KEY (`idsaidapecas`);

--
-- Índices de tabela `saidaprodfinal`
--
ALTER TABLE `saidaprodfinal`
  ADD PRIMARY KEY (`idsaidaprodfinal`);

--
-- Índices de tabela `saida_almoxarife`
--
ALTER TABLE `saida_almoxarife`
  ADD PRIMARY KEY (`idsaida_almoxarife`);

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
-- AUTO_INCREMENT de tabela `almoxarife`
--
ALTER TABLE `almoxarife`
  MODIFY `idalmoxarife` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `components`
--
ALTER TABLE `components`
  MODIFY `idcomponents` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `expedicao`
--
ALTER TABLE `expedicao`
  MODIFY `idexpedicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pecas`
--
ALTER TABLE `pecas`
  MODIFY `idpecas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `prodfinal`
--
ALTER TABLE `prodfinal`
  MODIFY `idprodfinal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `saidacomponents`
--
ALTER TABLE `saidacomponents`
  MODIFY `idsaidacomponents` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `saidaexpedicao`
--
ALTER TABLE `saidaexpedicao`
  MODIFY `idsaidaexpedicao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `saidapecas`
--
ALTER TABLE `saidapecas`
  MODIFY `idsaidapecas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `saidaprodfinal`
--
ALTER TABLE `saidaprodfinal`
  MODIFY `idsaidaprodfinal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `saida_almoxarife`
--
ALTER TABLE `saida_almoxarife`
  MODIFY `idsaida_almoxarife` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `setores`
--
ALTER TABLE `setores`
  MODIFY `idsetores` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_idsetores_1` FOREIGN KEY (`idsetores`) REFERENCES `setores` (`idsetores`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
