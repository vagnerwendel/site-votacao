-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/10/2023 às 02:07
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
-- Banco de dados: `votosistema`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usudados`
--

CREATE TABLE `usudados` (
  `id` int(11) NOT NULL,
  `nomeusuario` varchar(100) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `standard` enum('chapa','eleitor') NOT NULL,
  `status` int(11) NOT NULL,
  `votos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usudados`
--

INSERT INTO `usudados` (`id`, `nomeusuario`, `matricula`, `senha`, `photo`, `standard`, `status`, `votos`) VALUES
(17, 'chapa1', '1234567899', '123', '', 'chapa', 1, 2),
(18, 'chapa2', '9876543211', '123', '', 'chapa', 1, 1),
(19, 'aluno1', 'zzzzzzzzzzzzz', '123', '', 'eleitor', 0, 0),
(20, 'aluno2', '987654321f', '123', '', 'eleitor', 0, 0),
(21, 'aluno3', 'zxcvbnmasdd', '123', '', 'eleitor', 0, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usudados`
--
ALTER TABLE `usudados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usudados`
--
ALTER TABLE `usudados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
