-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Nov-2019 às 23:36
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
-- Estrutura da tabela `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id_area` int(11) NOT NULL AUTO_INCREMENT,
  `nome_area` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `area`
--

INSERT INTO `area` (`id_area`, `nome_area`) VALUES
(1, 'Ciências Humanas'),
(2, 'Ciências da Natureza'),
(3, 'Linguagens e Códigos'),
(4, 'Ciências Exatas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `id_postagem` int(11) DEFAULT NULL,
  `id_estudante` int(11) DEFAULT NULL,
  `texto_comentario` varchar(256) DEFAULT NULL,
  `data_comentario` date DEFAULT NULL,
  `hora_comentario` time DEFAULT NULL,
  PRIMARY KEY (`id_comentario`),
  KEY `id_postagem` (`id_postagem`),
  KEY `id_estudante` (`id_estudante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cont_selec`
--

CREATE TABLE IF NOT EXISTS `cont_selec` (
  `id_estudante` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  KEY `id_estudante` (`id_estudante`),
  KEY `id_materia` (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curtidas`
--

CREATE TABLE IF NOT EXISTS `curtidas` (
  `id_postagem` int(11) DEFAULT NULL,
  `id_estudante` int(11) DEFAULT NULL,
  `tipo_curtida` int(1) NOT NULL,
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
-- Estrutura da tabela `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `nome_materia` varchar(64) DEFAULT NULL,
  `id_area` int(11) NOT NULL,
  PRIMARY KEY (`id_materia`),
  KEY `id_area` (`id_area`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `materia`
--

INSERT INTO `materia` (`id_materia`, `nome_materia`, `id_area`) VALUES
(1, 'Física', 2),
(2, 'Biologia', 2),
(3, 'Química', 2),
(4, 'Literatura', 3),
(5, 'Educação Física', 3),
(6, 'Redação', 3),
(7, 'Português', 3),
(8, 'Língua Estrangeira', 3),
(9, 'Artes', 3),
(10, 'História', 1),
(11, 'Geografia', 1),
(12, 'Filosofia', 1),
(13, 'Sociologia', 1),
(14, 'Matemática', 4),
(15, 'Informática', 4),
(16, 'QuÃ­mica', 2),
(17, 'HistÃ³ria', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE IF NOT EXISTS `postagem` (
  `id_postagem` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudante` int(11) DEFAULT NULL,
  `id_materia` int(11) NOT NULL,
  `titulo_postagem` varchar(64) DEFAULT NULL,
  `imagem_postagem` varchar(64) DEFAULT NULL,
  `ativa` int(1) DEFAULT 0,
  PRIMARY KEY (`id_postagem`),
  KEY `id_estudante` (`id_estudante`),
  KEY `id_materia` (`id_materia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`id_postagem`, `id_estudante`, `id_materia`, `titulo_postagem`, `imagem_postagem`) VALUES
(1, 1, 2, '2 Lei de Mendel', '18c2da5bad8b689765799fce2b2c5b32'),
(2, 1, 16, 'Ãcido carboxilico', '3b529ee8f4f9aacd78764feaa00a07d7'),
(3, 2, 16, 'Ãlcool', 'ffbed8db9c4ba023debc7c8eb2c37a18'),
(4, 2, 16, 'AldeÃ­dos', '8728ee8c49c41f697e84fa97f2105008'),
(5, 3, 16, 'Amida', '205d0c5a85caa7978c5a23d9c95f99d4'),
(6, 3, 16, 'Amina', 'a1456b8dfaf4491a78f0f98282c9d6a7'),
(7, 4, 12, 'Atividade racional', '1685404f28897a5b1a30ab7ee7518324'),
(8, 4, 16, 'Benzeno', '97c55aa84bb0523875e5719368a43cc8'),
(9, 5, 11, 'Blocos EconÃ´micos', 'd32cd9c82c78a89bb49e72b09451ac1c'),
(10, 5, 16, 'Cadeias CarbÃ´nicas', '986b8ef1424956c410f76d2c0af39574'),
(11, 6, 16, 'Cetonas', 'c9edcd41e9ebd7060da9d83aeb71ac79'),
(12, 6, 16, 'Ã‰ster', 'bfdc260d68d16bcf783ce27d43eecb4d'),
(13, 6, 16, 'Ã‰ter', '91cdb15980d84e39bae782fd383b97e3'),
(14, 7, 2, 'Fator RH', 'ccabdea330a5a0bfc41705dfdfe53a57'),
(15, 7, 16, 'FenÃ³is', '9156898b4bd3085f544ba2ef21d81069'),
(16, 8, 17, 'Feudalismo', 'd5a106847c5b07361778d2dca524780b'),
(17, 8, 2, 'GenÃ©tica', 'a3086fd3e529160d1ba9074dea39ce7a'),
(18, 9, 16, 'Haletos OrgÃ¢nicos', '88cfaef26387a317479af6888051028c'),
(19, 9, 16, 'Hidrocarbonetos Ramificados', '7d531d26ec5ab183b082f7b0525e5277'),
(20, 10, 16, 'Hidrocarbonetos', 'd09e11f4cf46d7eabf38d6cdd8d1b4d0'),
(21, 10, 16, 'Isonitrilas', '7e916537125f3fcbe9c06b27efa18892'),
(22, 11, 16, 'LigaÃ§Ãµes do carbono', 'ea48bf547e67d3f95da1ec78df2c5c94'),
(23, 11, 16, 'Massa Molar', '9adaea0923e5f2dc2b02e5c552f7abcb'),
(24, 12, 16, 'Molaridade', '4829732747f2dbb78341a919e381364f'),
(25, 12, 16, 'Nitrilas', '9a6747b19eb5834fe7d028dd758c0da4'),
(26, 13, 16, 'Nitrocomposto', 'f0044dcf6705f468524ef2e012d72e82'),
(27, 13, 16, 'Nomenclatura para Benzeno', '1f105007aa607b40ed23addcae22af1c'),
(28, 14, 16, 'Postulado de KekulÃ©', '7a51ce4a204134ad743b232b4f35a163'),
(29, 14, 16, 'RegionalizaÃ§Ã£o', 'd41d8cd98f00b204e9800998ecf8427e'),
(30, 15, 16, 'Sais de Ãcidos', '7875b5c0dd6a50d223734866b9f7744c'),
(31, 15, 16, 'Solubilidade', 'a39d844fddfef42b67d780ae82055b06'),
(32, 16, 16, 'TÃ­tulo', '5b13a8f5c7e115a5f61ade6bca2c2220');

-- --------------------------------------------------------

--
-- Estrutura da tabela `seguidor`
--

CREATE TABLE IF NOT EXISTS `seguidor` (
  `seguidor` int(11) DEFAULT NULL,
  `seguido` int(11) DEFAULT NULL,
  KEY `seguidor` (`seguidor`),
  KEY `seguido` (`seguido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id_tag` int(11) NOT NULL AUTO_INCREMENT,
  `nome_tag` varchar(32) NOT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Extraindo dados da tabela `tag`
--

INSERT INTO `tag` (`id_tag`, `nome_tag`) VALUES
(1, 'biologia'),
(2, '2LeiMendel'),
(3, 'Mendel'),
(4, 'Genetica'),
(5, 'quimica'),
(6, 'quimicaorganica'),
(7, 'acidocarboxilico'),
(8, 'acidos'),
(9, 'hidrocarbonetos'),
(10, 'alcool'),
(11, 'aldeidos'),
(12, 'amida'),
(13, 'amina'),
(14, 'filosofia'),
(15, 'razao'),
(16, 'palavrarazao'),
(17, 'benzeno'),
(18, 'blocoseconomicos'),
(19, 'mercosul'),
(20, 'uniaoeuropeia'),
(21, 'ptam'),
(22, 'cadeiascarbonicas'),
(23, 'cetonas'),
(24, 'ester'),
(25, 'sangue'),
(26, 'fatorrh'),
(27, 'fenÃ³is'),
(28, 'historia'),
(29, 'feudalismo'),
(30, 'idademedia'),
(31, 'clero'),
(32, 'servos'),
(33, 'cruzamentos'),
(34, 'haletosorganicos'),
(35, 'hidrocarbonetosramificados'),
(36, 'isonitrilas'),
(37, 'ligacoesdocarbono'),
(38, 'massamolar'),
(39, 'molaridade'),
(40, 'nitrilas'),
(41, 'nitrocomposto'),
(42, 'nomenclatura'),
(43, 'postulado'),
(44, 'kekule'),
(45, 'postuladodekekule]'),
(46, 'geografia'),
(47, 'regionalizacao'),
(48, 'desenvolvido'),
(49, 'subdesenvolvido'),
(50, 'nomundo'),
(51, 'saisacidos'),
(52, 'solubilidade'),
(53, 'titulo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tag_post`
--

CREATE TABLE IF NOT EXISTS `tag_post` (
  `id_postagem` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL,
  KEY `id_postagem` (`id_postagem`),
  KEY `id_tag` (`id_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tag_post`
--

INSERT INTO `tag_post` (`id_postagem`, `id_tag`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(3, 5),
(3, 6),
(3, 10),
(3, 9),
(4, 5),
(4, 6),
(4, 11),
(4, 9),
(5, 5),
(5, 6),
(5, 12),
(5, 9),
(6, 5),
(6, 6),
(6, 13),
(6, 9),
(7, 14),
(7, 15),
(7, 16),
(8, 5),
(8, 6),
(8, 17),
(8, 9),
(9, 18),
(9, 19),
(9, 20),
(9, 21),
(10, 5),
(10, 6),
(10, 22),
(10, 9),
(11, 5),
(11, 6),
(11, 23),
(11, 9),
(12, 5),
(12, 6),
(12, 24),
(12, 9),
(13, 5),
(13, 6),
(13, 24),
(13, 9),
(14, 1),
(14, 25),
(14, 26),
(15, 5),
(15, 6),
(15, 27),
(15, 9),
(16, 28),
(16, 29),
(16, 30),
(16, 30),
(16, 31),
(16, 32),
(17, 4),
(17, 33),
(17, 1),
(18, 5),
(18, 6),
(18, 34),
(18, 9),
(19, 5),
(19, 6),
(19, 35),
(19, 9),
(20, 5),
(20, 6),
(20, 9),
(21, 5),
(21, 6),
(21, 36),
(22, 37),
(23, 5),
(23, 38),
(24, 5),
(24, 39),
(25, 5),
(25, 6),
(25, 40),
(26, 5),
(26, 6),
(26, 41),
(27, 5),
(27, 6),
(27, 17),
(27, 42),
(27, 9),
(28, 5),
(28, 6),
(28, 43),
(28, 44),
(28, 45),
(29, 46),
(29, 47),
(29, 48),
(29, 49),
(29, 50),
(30, 5),
(30, 6),
(30, 51),
(31, 5),
(31, 52),
(32, 5),
(32, 53);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_estudante` int(11) NOT NULL AUTO_INCREMENT,
  `primeiro_nome_usuario` varchar(64) NOT NULL,
  `segundo_nome_usuario` varchar(64) NOT NULL,
  `portifolio_usuario` varchar(512) DEFAULT NULL,
  `imagem_usuario` varchar(256) DEFAULT NULL,
  `email_usuario` varchar(64) NOT NULL,
  `senha_usuario` varchar(64) NOT NULL,
  PRIMARY KEY (`id_estudante`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_estudante`, `primeiro_nome_usuario`, `segundo_nome_usuario`, `portifolio_usuario`, `imagem_usuario`, `email_usuario`, `senha_usuario`) VALUES
(1, 'Gustavo', 'Moretti', NULL, NULL, 'moretti@gmail.com', '123'),
(2, 'Alexandre', 'Wesley', NULL, NULL, 'alexandre@gmail.com', '123'),
(3, 'Marcos ', 'Antonio', NULL, NULL, 'marcos@gmail.com', '123'),
(4, 'Giovanna ', 'Melo', NULL, NULL, 'giovanna@gmail.com', '123'),
(5, 'Lucas', 'Alexandre', NULL, NULL, 'lucas@gmail.com', '123'),
(6, 'JoÃ£o', 'Carlos Guassi', NULL, NULL, 'joao@gmail.com', '123'),
(7, 'Marcos', 'Antonio Fuzzato', NULL, NULL, 'fuzzato@gmail.com', '123'),
(8, 'Matheus', 'Aureliano', NULL, NULL, 'matheus@gmail.com', '123'),
(9, 'Gustavo', 'Lucas', NULL, NULL, 'gustavo@gmail.com', '123'),
(10, 'Hadassa', 'Medeiros', NULL, NULL, 'hadassa@gmail.com', '123'),
(11, 'Julia', 'Caputi', NULL, NULL, 'julia@gmail.com', '123'),
(12, 'Lucas', 'Henrique', NULL, NULL, 'lucas2@gmail.com', '123'),
(13, 'Mario', 'Amado', NULL, NULL, 'mario@gmail.com', '123'),
(14, 'Maria', 'de Paiva', NULL, NULL, 'maria@gmail.com', '123'),
(15, 'Brenno', 'Siqueira', NULL, NULL, 'brenno@gmail.com', '123'),
(16, 'Gabriel', 'Nalin', NULL, NULL, 'gabriel@gmail.com', '123');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_estudante`) REFERENCES `usuario` (`id_estudante`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_postagem`) REFERENCES `postagem` (`id_postagem`);

--
-- Limitadores para a tabela `cont_selec`
--
ALTER TABLE `cont_selec`
  ADD CONSTRAINT `cont_selec_ibfk_1` FOREIGN KEY (`id_estudante`) REFERENCES `usuario` (`id_estudante`),
  ADD CONSTRAINT `cont_selec_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`);

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
-- Limitadores para a tabela `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `materia_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`);

--
-- Limitadores para a tabela `postagem`
--
ALTER TABLE `postagem`
  ADD CONSTRAINT `postagem_ibfk_1` FOREIGN KEY (`id_estudante`) REFERENCES `usuario` (`id_estudante`),
  ADD CONSTRAINT `postagem_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`);

--
-- Limitadores para a tabela `seguidor`
--
ALTER TABLE `seguidor`
  ADD CONSTRAINT `seguidor_ibfk_1` FOREIGN KEY (`seguidor`) REFERENCES `usuario` (`id_estudante`),
  ADD CONSTRAINT `seguidor_ibfk_2` FOREIGN KEY (`seguido`) REFERENCES `usuario` (`id_estudante`);

--
-- Limitadores para a tabela `tag_post`
--
ALTER TABLE `tag_post`
  ADD CONSTRAINT `tag_post_ibfk_1` FOREIGN KEY (`id_postagem`) REFERENCES `postagem` (`id_postagem`),
  ADD CONSTRAINT `tag_post_ibfk_2` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
