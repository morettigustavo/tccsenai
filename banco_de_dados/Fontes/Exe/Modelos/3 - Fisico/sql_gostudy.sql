create database db_gostudy;

use db_gostudy;

CREATE TABLE Usuario (
id_estudante int PRIMARY KEY AUTO_INCREMENT,
nome varchar(64),
email varchar(64),
senha varchar(64)
);

CREATE TABLE Area_Cont (
id_conteudo int,
id_materia int
);

CREATE TABLE Cont_Post (
id_conteudo int,
id_postagem int
);

CREATE TABLE Conteudo (
id_conteudo int PRIMARY KEY AUTO_INCREMENT,
nome varchar(64)
);

CREATE TABLE Postagem (
id_postagem int PRIMARY KEY,
id_estudante int,
FOREIGN KEY(id_estudante) REFERENCES Usuario (id_estudante)
);

CREATE TABLE Favoritos (
id_postagem int,
id_estudante int,
FOREIGN KEY(id_postagem) REFERENCES Postagem (id_postagem),
FOREIGN KEY(id_estudante) REFERENCES Usuario (id_estudante)
);

CREATE TABLE Denuncias (
id_postagem int,
id_estudante int,
FOREIGN KEY(id_postagem) REFERENCES Postagem (id_postagem),
FOREIGN KEY(id_estudante) REFERENCES Usuario (id_estudante)
);

CREATE TABLE Seguidor (
id_estudante int,
seguido int
);

CREATE TABLE Comentarios (
id_postagem int,
id_estudante int,
FOREIGN KEY(id_postagem) REFERENCES Postagem (id_postagem),
FOREIGN KEY(id_estudante) REFERENCES Usuario (id_estudante)
);

CREATE TABLE Curtidas (
id_postagem int,
id_estudante int,
FOREIGN KEY(id_postagem) REFERENCES Postagem (id_postagem),
FOREIGN KEY(id_estudante) REFERENCES Usuario (id_estudante)
);

CREATE TABLE Area_de_conhecimento (
id_materia int PRIMARY KEY auto_increment,
nome varchar(64),
descricao varchar(128)
);

CREATE TABLE Cont_Selec (
id_estudante int,
id_conteudo int,
FOREIGN KEY(id_estudante) REFERENCES Usuario (id_estudante),
FOREIGN KEY(id_conteudo) REFERENCES Conteudo (id_conteudo)
);

CREATE TABLE Criar_Cont (
id_estudante int,
id_conteudo int,
FOREIGN KEY(id_estudante) REFERENCES Usuario (id_estudante),
FOREIGN KEY(id_conteudo) REFERENCES Conteudo (id_conteudo)
);

ALTER TABLE Area_Cont ADD FOREIGN KEY(id_conteudo) REFERENCES Conteudo (id_conteudo);
ALTER TABLE Area_Cont ADD FOREIGN KEY(id_materia) REFERENCES Area_de_conhecimento (id_materia);
ALTER TABLE Cont_Post ADD FOREIGN KEY(id_conteudo) REFERENCES Conteudo (id_conteudo);
ALTER TABLE Cont_Post ADD FOREIGN KEY(id_postagem) REFERENCES Postagem (id_postagem);
