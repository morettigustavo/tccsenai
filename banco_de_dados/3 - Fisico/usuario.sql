-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Nov-2019 às 17:12
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_gostudy`
--

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_estudante`, `primeiro_nome_usuario`, `segundo_nome_usuario`, `portifolio_usuario`, `imagem_usuario`, `email_usuario`, `senha_usuario`) VALUES
('Gustavo', 'Moretti', 'moretti@gmail.com', '123'),
('Alexandre', 'Wesley', 'alexandre@gmail.com', '123'),
('Paulo', 'Eduardo', 'paulo@gmail.com', '123'),
('Gustavo', 'Lucas', 'gustavo@gmail.com', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
