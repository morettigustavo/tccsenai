SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE  IF NOT EXISTS `usuario` (
  `id_estudante` int(11) NOT NULL AUTO_INCREMENT,
  `primeiro_nome_usuario` varchar(64) NOT NULL,
  `segundo_nome_usuario` varchar(64) NOT NULL,
  `portifolio_usuario` varchar(512),
  `imagem_usuario` varchar(256),
  `email_usuario` varchar(64) NOT NULL,
  `senha_usuario` varchar(64) NOT NULL,
  PRIMARY KEY (`id_estudante`)
);

CREATE TABLE  IF NOT EXISTS `area` (
  `id_area` int(11) NOT NULL AUTO_INCREMENT,
  `nome_area` varchar(64) ,
  PRIMARY KEY (`id_area`)
);

CREATE TABLE  IF NOT EXISTS `materia` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `nome_materia` varchar(64) ,
  `id_area` int(11) NOT NULL,
  PRIMARY KEY (`id_materia`),
  FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`)
);

CREATE TABLE IF NOT EXISTS `tag` (
  `id_tag` int(11) NOT NULL AUTO_INCREMENT,
  `nome_tag` varchar(16) NOT NULL,
  PRIMARY KEY (`id_tag`)
);

CREATE TABLE IF NOT EXISTS `postagem` (
  `id_postagem` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudante` int(11) ,
  `id_materia` int(11) NOT NULL,
  `titulo_postagem` varchar(64) ,
  `imagem_postagem` varchar(64),
  PRIMARY KEY (`id_postagem`),
  FOREIGN KEY (`id_estudante`) REFERENCES `usuario` (`id_estudante`),
  FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`)
);

CREATE TABLE IF NOT EXISTS `tag_post` (
  `id_postagem` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL,
  FOREIGN KEY (`id_postagem`) REFERENCES `postagem` (`id_postagem`),
  FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`)
);


CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `id_postagem` int(11),
  `id_estudante` int(11),
  `texto_comentario` varchar(256),
  `data_comentario` date,
  `hora_comentario` time,
  KEY `id_postagem` (`id_postagem`),
  KEY `id_estudante` (`id_estudante`),
  PRIMARY KEY (`id_comentario`),
  FOREIGN KEY (`id_estudante`) REFERENCES `usuario` (`id_estudante`),
  FOREIGN KEY (`id_postagem`) REFERENCES `postagem` (`id_postagem`)
);

CREATE TABLE IF NOT EXISTS `curtidas` (
  `id_postagem` int(11) ,
  `id_estudante` int(11) ,
  `tipo_curtida` int(1) NOT NULL,
  FOREIGN KEY (`id_postagem`) REFERENCES `postagem` (`id_postagem`),
  FOREIGN KEY (`id_estudante`) REFERENCES `usuario` (`id_estudante`)
);

CREATE TABLE IF NOT EXISTS `denuncias` (
  `id_postagem` int(11) ,
  `id_estudante` int(11) ,
  FOREIGN KEY (`id_postagem`) REFERENCES `postagem` (`id_postagem`),
  FOREIGN KEY (`id_estudante`) REFERENCES `usuario` (`id_estudante`)
);

CREATE TABLE IF NOT EXISTS `favoritos` (
  `id_postagem` int(11) ,
  `id_estudante` int(11) ,
  FOREIGN KEY (`id_postagem`) REFERENCES `postagem` (`id_postagem`),
  FOREIGN KEY (`id_estudante`) REFERENCES `usuario` (`id_estudante`)
);

CREATE TABLE IF NOT EXISTS `seguidor` (
  `seguidor` int(11) ,
  `seguido` int(11) ,
  FOREIGN KEY (`seguidor`) REFERENCES `usuario` (`id_estudante`),
  FOREIGN KEY (`seguido`) REFERENCES `usuario` (`id_estudante`)
);

CREATE TABLE IF NOT EXISTS `cont_selec` (
  `id_estudante` int(11) ,
  `id_materia` int(11) ,
  FOREIGN KEY (`id_estudante`) REFERENCES `usuario` (`id_estudante`),
  FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`)
);
