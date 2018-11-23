-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Nov-2018 às 04:31
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gerenciador_requisitos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `baseline`
--

CREATE TABLE `baseline` (
  `id` int(11) NOT NULL,
  `criacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `baseline_requisito`
--

CREATE TABLE `baseline_requisito` (
  `id` int(11) NOT NULL,
  `id_baseline` int(11) NOT NULL,
  `nome_requisito` varchar(255) NOT NULL,
  `descricao_requisito` text NOT NULL,
  `funcional_requisito` tinyint(1) NOT NULL,
  `criacao_requisito` date NOT NULL,
  `id_autor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `requisito`
--

CREATE TABLE `requisito` (
  `id` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `descricao` text NOT NULL,
  `funcional` tinyint(1) NOT NULL,
  `criacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `requisito`
--

INSERT INTO `requisito` (`id`, `id_autor`, `nome`, `descricao`, `funcional`, `criacao`) VALUES
(15, 1, 'Requisito 01', 'asdasdasdasd<b>asdasdasdasd</b>asdasdasdasd', 1, '2018-11-20'),
(16, 1, 'Requisito 02', 'Teste', 0, '2018-11-20'),
(17, 1, 'sadasd', 'asdasdasd', 1, '2018-11-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baseline`
--
ALTER TABLE `baseline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baseline_requisito`
--
ALTER TABLE `baseline_requisito`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requisito`
--
ALTER TABLE `requisito`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baseline`
--
ALTER TABLE `baseline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `baseline_requisito`
--
ALTER TABLE `baseline_requisito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requisito`
--
ALTER TABLE `requisito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
