-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Fev-2020 às 15:03
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `farmacia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamento`
--

CREATE TABLE `medicamento` (
  `id_medicamento` int(11) NOT NULL,
  `NomeVenda` varchar(200) NOT NULL,
  `CompostoAtivo` varchar(200) NOT NULL,
  `CombateVirus` varchar(200) NOT NULL,
  `DoseCrianca` varchar(200) NOT NULL,
  `DoseAdulto` varchar(200) NOT NULL,
  `DoseIdoso` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `med_vir`
--

CREATE TABLE `med_vir` (
  `idMed_Vir` int(11) NOT NULL,
  `id_medicamento` int(11) NOT NULL,
  `id_virus` int(11) NOT NULL,
  `CombateVirus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `NomeCompleto` varchar(200) NOT NULL,
  `Usuario` varchar(200) NOT NULL,
  `Senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `virus`
--

CREATE TABLE `virus` (
  `id_virus` int(11) NOT NULL,
  `NomeCientifico` varchar(200) NOT NULL,
  `NomePopular` varchar(200) NOT NULL,
  `PeriodoIcubacao` varchar(200) NOT NULL,
  `MedicamentoNecessario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`id_medicamento`);

--
-- Índices para tabela `med_vir`
--
ALTER TABLE `med_vir`
  ADD PRIMARY KEY (`idMed_Vir`),
  ADD UNIQUE KEY `id_medicamento` (`id_medicamento`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `virus`
--
ALTER TABLE `virus`
  ADD PRIMARY KEY (`id_virus`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `id_medicamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `med_vir`
--
ALTER TABLE `med_vir`
  MODIFY `idMed_Vir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `virus`
--
ALTER TABLE `virus`
  MODIFY `id_virus` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
