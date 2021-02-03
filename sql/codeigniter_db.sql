-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 29/01/2021 às 19:02
-- Versão do servidor: 5.7.32-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.33-38+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `codeigniter_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id_endereco` int(11) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `endereco` varchar(20) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `uf` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `enderecos`
--

INSERT INTO `enderecos` (`id_endereco`, `cep`, `endereco`, `numero`, `bairro`, `uf`) VALUES
(1, '26580220', 'rua fausto', 567, 'vila emil', 'RJ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `usuario` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `senha`, `usuario`, `status`) VALUES
(1, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'usuario@email.com.br', 1),
(2, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'danilo@email.com.br', 1),
(5, '48058e0c99bf7d689ce71c360699a14ce2f99774', 'outrouser@email.com', 1),
(6, 'e77dcace2b3869df8f46925352b67e51938d5a76', 'maisuser@email.com.br', 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
