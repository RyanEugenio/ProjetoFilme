-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 11-Nov-2020 às 20:24
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id15354623_bancofilmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `idfilme` int(4) NOT NULL,
  `nomeFilme` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `idadeIndicativa` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `descricaoFilme` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`idfilme`, `nomeFilme`, `idadeIndicativa`, `descricaoFilme`) VALUES
(1, 'Vovó... Zona', '12 Anos', 'Um agente durão do FBI chega ao extremo para ficar na pista de um ladrão de bancos violento que fugiu da prisão. Enquanto se disfarça de avó obesa com uma língua afiada, ele é forçado a usar todas as suas habilidades, desde cozinhar a levar as crianças para a igreja local.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`idfilme`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filme`
--
ALTER TABLE `filme`
  MODIFY `idfilme` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
