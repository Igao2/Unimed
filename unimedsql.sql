-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Set-2022 às 00:09
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `unimed`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `unimedsql`
--

CREATE TABLE `unimedsql` (
  `nome` char(32) NOT NULL,
  `dataade` date NOT NULL,
  `valortotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `unimedsql`
--

INSERT INTO `unimedsql` (`nome`, `dataade`, `valortotal`) VALUES
('Igor', '2012-09-22', 414),
('Richard', '2013-09-22', 414);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `unimedsql`
--
ALTER TABLE `unimedsql`
  ADD UNIQUE KEY `aa` (`nome`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
