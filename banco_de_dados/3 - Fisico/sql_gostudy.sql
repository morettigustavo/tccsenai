-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26-Ago-2019 às 21:16
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `area_cont`
--

CREATE TABLE IF NOT EXISTS `area_cont` (
  `id_conteudo` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  KEY `id_conteudo` (`id_conteudo`),
  KEY `id_materia` (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `area_de_conhecimento`
--

CREATE TABLE IF NOT EXISTS `area_de_conhecimento` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(64) DEFAULT NULL,
  `descricao` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_postagem` int(11) DEFAULT NULL,
  `id_estudante` int(11) DEFAULT NULL,
  KEY `id_postagem` (`id_postagem`),
  KEY `id_estudante` (`id_estudante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

CREATE TABLE IF NOT EXISTS `conteudo` (
  `id_conteudo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id_conteudo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cont_post`
--

CREATE TABLE IF NOT EXISTS `cont_post` (
  `id_conteudo` int(11) DEFAULT NULL,
  `id_postagem` int(11) DEFAULT NULL,
  KEY `id_conteudo` (`id_conteudo`),
  KEY `id_postagem` (`id_postagem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cont_selec`
--

CREATE TABLE IF NOT EXISTS `cont_selec` (
  `id_estudante` int(11) DEFAULT NULL,
  `id_conteudo` int(11) DEFAULT NULL,
  KEY `id_estudante` (`id_estudante`),
  KEY `id_conteudo` (`id_conteudo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `criar_cont`
--

CREATE TABLE IF NOT EXISTS `criar_cont` (
  `id_estudante` int(11) DEFAULT NULL,
  `id_conteudo` int(11) DEFAULT NULL,
  KEY `id_estudante` (`id_estudante`),
  KEY `id_conteudo` (`id_conteudo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curtidas`
--

CREATE TABLE IF NOT EXISTS `curtidas` (
  `id_postagem` int(11) DEFAULT NULL,
  `id_estudante` int(11) DEFAULT NULL,
  KEY `id_postagem` (`id_postagem`),
  KEY `id_estudante` (`id_estudante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `denuncias`
--

CREATE TABLE IF NOT EXISTS `denuncias` (
  `id_postagem` int(11) DEFAULT NULL,
  `id_estudante` int(11) DEFAULT NULL,
  KEY `id_postagem` (`id_postagem`),
  KEY `id_estudante` (`id_estudante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `favoritos`
--

CREATE TABLE IF NOT EXISTS `favoritos` (
  `id_postagem` int(11) DEFAULT NULL,
  `id_estudante` int(11) DEFAULT NULL,
  KEY `id_postagem` (`id_postagem`),
  KEY `id_estudante` (`id_estudante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id_estudante` int(11) NOT NULL,
  `hora` time NOT NULL,
  `data` date NOT NULL,
  `ip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `log`
--

INSERT INTO `log` (`id_estudante`, `hora`, `data`, `ip`) VALUES
(0, '20:49:21', '2019-08-26', 0),
(0, '20:50:00', '2019-08-26', 0),
(0, '20:50:32', '2019-08-26', 0),
(0, '20:51:44', '2019-08-26', 0),
(1, '20:55:26', '2019-08-26', 0),
(2, '20:55:49', '2019-08-26', 0),
(1, '20:57:30', '2019-08-26', 0),
(0, '20:57:36', '2019-08-26', 0),
(0, '20:57:51', '2019-08-26', 0),
(0, '21:01:56', '2019-08-26', 0),
(0, '21:02:49', '2019-08-26', 0),
(0, '21:03:19', '2019-08-26', 0),
(0, '21:03:30', '2019-08-26', 0),
(0, '21:04:22', '2019-08-26', 0),
(0, '21:04:30', '2019-08-26', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE IF NOT EXISTS `postagem` (
  `id_postagem` int(11) NOT NULL,
  `id_estudante` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_postagem`),
  KEY `id_estudante` (`id_estudante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `seguidor`
--

CREATE TABLE IF NOT EXISTS `seguidor` (
  `id_estudante` int(11) DEFAULT NULL,
  `seguido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_estudante` int(11) NOT NULL AUTO_INCREMENT,
  `primeiro_nome` varchar(64) DEFAULT NULL,
  `segundo_nome` varchar(64) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `senha` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id_estudante`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_estudante`, `primeiro_nome`, `segundo_nome`, `email`, `senha`) VALUES
(1, 'Alexandre', 'Wesley', 'alexandre@gmail.com', '123'),
(2, 'Gustavo', 'Moretti', 'moretti@gmail.com', '123');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `area_cont`
--
ALTER TABLE `area_cont`
  ADD CONSTRAINT `area_cont_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `area_de_conhecimento` (`id_materia`),
  ADD CONSTRAINT `area_cont_ibfk_1` FOREIGN KEY (`id_conteudo`) REFERENCES `conteudo` (`id_conteudo`);

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_postagem`) REFERENCES `postagem` (`id_postagem`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_estudante`) REFERENCES `usuario` (`id_estudante`);

--
-- Limitadores para a tabela `cont_post`
--
ALTER TABLE `cont_post`
  ADD CONSTRAINT `cont_post_ibfk_2` FOREIGN KEY (`id_postagem`) REFERENCES `postagem` (`id_postagem`),
  ADD CONSTRAINT `cont_post_ibfk_1` FOREIGN KEY (`id_conteudo`) REFERENCES `conteudo` (`id_conteudo`);

--
-- Limitadores para a tabela `cont_selec`
--
ALTER TABLE `cont_selec`
  ADD CONSTRAINT `cont_selec_ibfk_1` FOREIGN KEY (`id_estudante`) REFERENCES `usuario` (`id_estudante`),
  ADD CONSTRAINT `cont_selec_ibfk_2` FOREIGN KEY (`id_conteudo`) REFERENCES `conteudo` (`id_conteudo`);

--
-- Limitadores para a tabela `criar_cont`
--
ALTER TABLE `criar_cont`
  ADD CONSTRAINT `criar_cont_ibfk_1` FOREIGN KEY (`id_estudante`) REFERENCES `usuario` (`id_estudante`),
  ADD CONSTRAINT `criar_cont_ibfk_2` FOREIGN KEY (`id_conteudo`) REFERENCES `conteudo` (`id_conteudo`);

--
-- Limitadores para a tabela `curtidas`
--
ALTER TABLE `curtidas`
  ADD CONSTRAINT `curtidas_ibfk_1` FOREIGN KEY (`id_postagem`) REFERENCES `postagem` (`id_postagem`),
  ADD CONSTRAINT `curtidas_ibfk_2` FOREIGN KEY (`id_estudante`) REFERENCES `usuario` (`id_estudante`);

--
-- Limitadores para a tabela `denuncias`
--
ALTER TABLE `denuncias`
  ADD CONSTRAINT `denuncias_ibfk_1` FOREIGN KEY (`id_postagem`) REFERENCES `postagem` (`id_postagem`),
  ADD CONSTRAINT `denuncias_ibfk_2` FOREIGN KEY (`id_estudante`) REFERENCES `usuario` (`id_estudante`);

--
-- Limitadores para a tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`id_postagem`) REFERENCES `postagem` (`id_postagem`),
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`id_estudante`) REFERENCES `usuario` (`id_estudante`);

--
-- Limitadores para a tabela `postagem`
--
ALTER TABLE `postagem`
  ADD CONSTRAINT `postagem_ibfk_1` FOREIGN KEY (`id_estudante`) REFERENCES `usuario` (`id_estudante`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
