-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Dez-2023 às 20:07
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `os`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_auxiliar`
--

DROP TABLE IF EXISTS `tabela_auxiliar`;
CREATE TABLE IF NOT EXISTS `tabela_auxiliar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sevico1` int NOT NULL,
  `servico1` int DEFAULT NULL,
  `servico2` int DEFAULT NULL,
  `servico3` int DEFAULT NULL,
  `servico4` int DEFAULT NULL,
  `servico5` int DEFAULT NULL,
  `servico6` int DEFAULT NULL,
  `servico7` int DEFAULT NULL,
  `servico8` int DEFAULT NULL,
  `servico9` int DEFAULT NULL,
  `servico10` int DEFAULT NULL,
  `servico11` int DEFAULT NULL,
  `servico12` int DEFAULT NULL,
  `servico13` int DEFAULT NULL,
  `servico14` int DEFAULT NULL,
  `servico15` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `servico1` (`servico1`),
  KEY `servico2` (`servico2`),
  KEY `servico3` (`servico3`),
  KEY `servico4` (`servico4`),
  KEY `servico5` (`servico5`),
  KEY `servico6` (`servico6`),
  KEY `servico7` (`servico7`),
  KEY `servico8` (`servico8`),
  KEY `servico9` (`servico9`),
  KEY `servico10` (`servico10`),
  KEY `servico11` (`servico11`),
  KEY `servico12` (`servico12`),
  KEY `servico13` (`servico13`),
  KEY `servico14` (`servico14`),
  KEY `servico15` (`servico15`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
