-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Mar-2020 às 08:09
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `travel_a`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `travels`
--

CREATE TABLE `travels` (
  `id_travel` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `origin` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `dateTo` date NOT NULL,
  `dateFrom` date NOT NULL,
  `tnumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `travels`
--

INSERT INTO `travels` (`id_travel`, `name`, `phone`, `origin`, `destination`, `dateTo`, `dateFrom`, `tnumber`) VALUES
(1, 'Rafael Fernandes Pereira', '(19) 99821-1035', 'Itajubá, MG, Brasil', 'Londres, Reino Unido', '2020-03-19', '2020-03-31', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `travels`
--
ALTER TABLE `travels`
  ADD PRIMARY KEY (`id_travel`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `travels`
--
ALTER TABLE `travels`
  MODIFY `id_travel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
