-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Out-2021 às 06:40
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `kauagab`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `biblioteca`
--

CREATE TABLE `biblioteca` (
  `id` int(11) NOT NULL,
  `imagem` text NOT NULL,
  `nome` text NOT NULL,
  `qnt_temporadas` int(11) NOT NULL,
  `qnt_episodios` int(11) NOT NULL,
  `detalhes` text NOT NULL,
  `temporada` int(11) NOT NULL,
  `episodio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `biblioteca`
--

INSERT INTO `biblioteca` (`id`, `imagem`, `nome`, `qnt_temporadas`, `qnt_episodios`, `detalhes`, `temporada`, `episodio`) VALUES
(29, 'midoriya.jpeg', 'gasoso', 5, 25, 'porcelana', 5, 23),
(30, 'flash.jpg', 'ligerinho vermelho', 8, 24, 'bicho é rapido', 7, 25),
(33, 'the100.jpg', 'the 100', 2, 27, 'blavla', 0, 0),
(35, 'theendoffuckingworld.jpg', 'theendoffuckingworld', 2, 24, 'vsdvczv', 0, 0),
(37, 'bokunohero.jpg', 'bokunohero', 25, 5, 'sdacsdver', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL,
  `biblioteca` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `biblioteca`) VALUES
(1, 'kaua', 'kauagab', '3228', '17 18 19 20'),
(2, 'gab', 'gab@', 'gab123', ' 21 22 23 24 25 26 27 28 29 30 31 32 33 34 35 36 37');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `biblioteca`
--
ALTER TABLE `biblioteca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
