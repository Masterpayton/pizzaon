-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Nov-2018 às 22:19
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guilherme_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE IF NOT EXISTS `carrinho` (
  `id_carrinho` int(11) NOT NULL AUTO_INCREMENT,
  `hora` datetime DEFAULT CURRENT_TIMESTAMP,
  `produto` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_carrinho`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id_carrinho`, `hora`, `produto`, `usuario`) VALUES
(1, '2018-11-10 17:38:42', 2, 1),
(2, '2018-11-10 17:38:44', 5, 1),
(3, '2018-11-10 17:38:48', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id_produtos` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `preco` decimal(4,2) DEFAULT NULL,
  `img` varchar(350) DEFAULT NULL,
  PRIMARY KEY (`id_produtos`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produtos`, `nome`, `preco`, `img`) VALUES
(1, 'Pizza de Calabresa', '30.00', 'img/produtos/pepperoni.jpg'),
(2, 'Pizza de Frango com Catupiry', '30.00', 'img/produtos/frango-com-catupiry.jpg'),
(5, 'Pizza de Quatro Queijos', '30.00', 'img/produtos/4queijos.jpg'),
(6, 'Pizza de Chocolate & Banana', '30.00', 'img/produtos/banana_chocolate.jpg'),
(7, 'Pizza de Frango', '30.00', 'img/produtos/frango.jpg'),
(8, 'Pizza de Morango & Chocolate', '30.00', 'img/produtos/strawberries-chocolate.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `endereco` varchar(350) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `cep`, `endereco`) VALUES
(1, 'Magno', 'm@g', '202cb962ac59075b964b07152d234b70', 123, '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
