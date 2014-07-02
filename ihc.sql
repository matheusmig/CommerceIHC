-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Jul-2014 às 02:16
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ihc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `Codigo` int(11) NOT NULL DEFAULT '0',
  `TipoProduto` text NOT NULL,
  `Nome` text NOT NULL,
  `Foto` text,
  `Marca` text,
  `Kcal` int(11) NOT NULL,
  `Proteina` int(11) NOT NULL,
  `Carboidrato` int(11) NOT NULL,
  `Lipidio` int(11) NOT NULL,
  `Fibra` int(11) NOT NULL,
  `Sodio` int(11) NOT NULL,
  `Acucar` int(11) NOT NULL,
  `Gluten` int(11) NOT NULL,
  `ComponentesAlergicos` text NOT NULL,
  PRIMARY KEY (`Codigo`),
  UNIQUE KEY `Codigo` (`Codigo`),
  KEY `Codigo_2` (`Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
