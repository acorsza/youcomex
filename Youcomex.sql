-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2015 at 08:28 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Youcomex`
--

-- --------------------------------------------------------

--
-- Table structure for table `Franquia`
--

CREATE TABLE IF NOT EXISTS `Franquia` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(255) NOT NULL,
  `Descricao` text NOT NULL,
  `Segmento` int(11) NOT NULL,
  `Logo` varchar(255) DEFAULT NULL,
  `CriadoEm` date NOT NULL,
  `AtualizadoEm` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Franquia`
--

INSERT INTO `Franquia` (`Id`, `Nome`, `Descricao`, `Segmento`, `Logo`, `CriadoEm`, `AtualizadoEm`) VALUES
(1, 'Casa do Pão de Queijo', 'Casa do Pão de Queijo é um restaurante de fast-food brasileiro.', 1, 'paodequeijo.jpeg', '2014-08-01', NULL),
(2, 'Contém 1g', 'Rede de cosméticos brasileira.', 2, 'contem1g.jpeg', '2014-08-01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Imagem`
--

CREATE TABLE IF NOT EXISTS `Imagem` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Legenda` varchar(255) DEFAULT NULL,
  `URL` varchar(255) NOT NULL,
  `CriadoEm` date NOT NULL,
  `UserId` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`),
  KEY `UserId` (`UserId`),
  KEY `UserId_2` (`UserId`),
  KEY `UserId_3` (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Noticia`
--

CREATE TABLE IF NOT EXISTS `Noticia` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(255) NOT NULL,
  `Texto` text NOT NULL,
  `Idioma` varchar(2) NOT NULL,
  `CriadoEm` date NOT NULL,
  `AtualizadoEm` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Segmento`
--

CREATE TABLE IF NOT EXISTS `Segmento` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Segmento` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Segmento`
--

INSERT INTO `Segmento` (`Id`, `Segmento`) VALUES
(1, 'Alimentação'),
(2, 'Cosméticos'),
(3, 'Esportes'),
(4, 'Moda');

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(32) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Senha` varchar(12) NOT NULL,
  `CriadoEm` date NOT NULL,
  `AtualizadoEm` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`Id`, `Nome`, `Email`, `Senha`, `CriadoEm`, `AtualizadoEm`) VALUES
(1, 'Administrador', 'vanessa@youcomex.com', '123456', '2014-08-01', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Imagem`
--
ALTER TABLE `Imagem`
  ADD CONSTRAINT `RelacaoUsuarioImagem` FOREIGN KEY (`UserId`) REFERENCES `Usuario` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
