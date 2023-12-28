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
-- Estrutura da tabela `inf_clientes`
--

DROP TABLE IF EXISTS `inf_clientes`;
CREATE TABLE IF NOT EXISTS `inf_clientes` (
  `nome` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `telefone1` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `telefone2` varchar(50) DEFAULT NULL,
  `cep` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `cidade` varchar(50) NOT NULL,
  `rua` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `num` varchar(40) DEFAULT NULL,
  `bairro` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT 'Shopping Park',
  PRIMARY KEY (`telefone1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `inf_clientes`
--

INSERT INTO `inf_clientes` (`nome`, `telefone1`, `telefone2`, `cep`, `cidade`, `rua`, `num`, `bairro`) VALUES
('Eduarda', '1', '232323', 'f', 'a', 'd', '3', 's'),
('Eduarda Mendonça de Freitas', '34 997741178', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
