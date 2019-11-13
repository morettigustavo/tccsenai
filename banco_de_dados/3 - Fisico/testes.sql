SELECT * FROM materia WHERE upper(nome) like '%$materia%';

SELECT usuario.primeiro_nome, usuario.segundo_nome, comentarios.*
FROM comentarios
INNER JOIN usuario ON comentarios.id_estudante = usuario.id_estudante
WHERE id_postagem = 2;

INSERT INTO materia(nome,id_area) VALUES ('Ingles', 2);

select * from materia;

SELECT id_postagem FROM postagem ORDER BY id_postagem DESC LIMIT 1;

SELECT postagem.titulo, postagem.imagem, materia.nome, area_de_conhecimento.nome
FROM postagem
INNER JOIN materia ON postagem.id_materia = materia.id_materia
INNER JOIN area_de_conhecimento ON materia.id_area = area_de_conhecimento.id_area;

SELECT id_postagem FROM postagem;

SELECT postagem.id_postagem, postagem.titulo_postagem, postagem.imagem_postagem,materia.nome_materia,area.nome_area,usuario.nome_usuario
FROM postagem
INNER JOIN materia ON postagem.id_materia = materia.id_materia
INNER JOIN area ON materia.id_area = area.id_area
INNER JOIN usuario ON postagem.id_estudante = usuario.id_estudante;

SELECT count(*) FROM curtidas WHERE id_postagem = 1 AND tipo_curtida = 1;
SELECT count(*) FROM curtidas WHERE id_postagem = 1 AND tipo_curtida = -1;

SELECT id_estudante,primeiro_nome_usuario, segundo_nome_usuario, portifolio_usuario FROM usuario WHERE id_estudante = 1;

SELECT id_estudante,primeiro_nome_usuario, segundo_nome_usuario, portifolio_usuario FROM usuario WHERE id_estudante = 2;

UPDATE usuario SET primeiro_nome_usuario = 'Gustavo', segundo_nome_usuario = 'Moretti', portifolio_usuario = 'Aluno' WHERE id_estudante = 2;

UPDATE usuario SET primeiro_nome_usuario = 'joao', segundo_nome_usuario = 'paulo', portifolio_usuario = 'OI sabonetelã' WHERE id_estudante = 3;

INSERT INTO seguidor(seguidor, seguido) VALUES (1,2);

SELECT * FROM seguidor;

DELETE FROM seguidor WHERE seguidor = 1 AND seguido = 2;

SELECT * FROM seguidor WHERE seguidor = 1 AND seguido = 2;

SELECT * FROM seguidor WHERE seguidor = 1;

SELECT * FROM seguidor WHERE seguidor = 2;

SELECT * FROM seguidor WHERE seguidor = 1 AND seguido = 2;


SELECT 
postagem.id_postagem, postagem.titulo_postagem, postagem.imagem_postagem,
materia.nome_materia,
area.nome_area,
usuario.primeiro_nome_usuario,usuario.segundo_nome_usuario
FROM postagem
INNER JOIN materia ON postagem.id_materia = materia.id_materia
INNER JOIN area ON materia.id_area = area.id_area
INNER JOIN usuario ON postagem.id_estudante = usuario.id_estudante;

SELECT 
usuario.id_estudante,usuario.primeiro_nome_usuario,usuario.segundo_nome_usuario, imagem_usuario,
postagem.id_postagem, postagem.titulo_postagem, postagem.imagem_postagem,
materia.nome_materia,
area.nome_area
FROM seguidor 
INNER JOIN postagem ON seguidor.seguido = postagem.id_estudante
INNER JOIN materia ON postagem.id_materia = materia.id_materia
INNER JOIN area ON materia.id_area = area.id_area
INNER JOIN usuario ON postagem.id_estudante = usuario.id_estudante 
WHERE seguidor = 1 ;

SELECT 
usuario.id_estudante,usuario.primeiro_nome_usuario,usuario.segundo_nome_usuario, usuario.imagem_usuario,
postagem.id_postagem, postagem.titulo_postagem, postagem.imagem_postagem,
materia.nome_materia,
area.nome_area
FROM postagem 
INNER JOIN materia ON postagem.id_materia = materia.id_materia
INNER JOIN area ON materia.id_area = area.id_area
INNER JOIN usuario ON postagem.id_estudante = usuario.id_estudante 
WHERE materia.nome_materia LIKE 'B%';

SELECT 
usuario.id_estudante,usuario.primeiro_nome_usuario,usuario.segundo_nome_usuario, usuario.imagem_usuario,
postagem.id_postagem, postagem.titulo_postagem, postagem.imagem_postagem,
materia.nome_materia,
area.nome_area
FROM seguidor 
INNER JOIN postagem ON seguidor.seguido = postagem.id_estudante
INNER JOIN materia ON postagem.id_materia = materia.id_materia
INNER JOIN area ON materia.id_area = area.id_area
INNER JOIN usuario ON postagem.id_estudante = usuario.id_estudante 
WHERE seguidor = 1 OR usuario.id_estudante= 1 ORDER BY id_postagem;

SELECT 
usuario.id_estudante,usuario.primeiro_nome_usuario,usuario.segundo_nome_usuario, usuario.imagem_usuario,
postagem.id_postagem, postagem.titulo_postagem, postagem.imagem_postagem,
materia.nome_materia,
area.nome_area
FROM seguidor 
INNER JOIN postagem ON seguidor.seguido = postagem.id_estudante
INNER JOIN materia ON postagem.id_materia = materia.id_materia
INNER JOIN area ON materia.id_area = area.id_area
INNER JOIN usuario ON postagem.id_estudante = usuario.id_estudante 
WHERE seguidor.seguidor = 1
UNION
SELECT 
usuario.id_estudante,usuario.primeiro_nome_usuario,usuario.segundo_nome_usuario, usuario.imagem_usuario,
postagem.id_postagem, postagem.titulo_postagem, postagem.imagem_postagem,
materia.nome_materia,
area.nome_area
FROM postagem 
INNER JOIN materia ON postagem.id_materia = materia.id_materia
INNER JOIN area ON materia.id_area = area.id_area
INNER JOIN usuario ON postagem.id_estudante = usuario.id_estudante 
WHERE postagem.id_estudante = 1;

select * from postagem;

SELECT count(*) FROM seguidor WHERE seguidor = 2;

SELECT count(*) FROM seguidor WHERE seguido = 2;

SELECT * FROM seguidor WHERE seguido = 1;

SELECT count(*) FROM materia WHERE nome_materia LIKE "%po%" AND id_area = 2;

SELECT id_materia FROM materia WHERE nome_materia LIKE '%Sociologia%' AND id_area = 1;

INSERT INTO materia (id_area, nome_materia) VALUES (4, "Matemática");
INSERT INTO materia (id_area, nome_materia) VALUES (4, "Informática");

SELECT id_tag FROM tag WHERE nome_tag LIKE '%%';

SELECT count(*) FROM tag WHERE nome_tag LIKE '%hidrocarbonetos%';
SELECT count(*) FROM tag WHERE nome_tag LIKE '%quimicaorganica%';
SELECT count(*) FROM tag WHERE nome_tag LIKE '%quimica%';

SELECT postagem.id_postagem, postagem.imagem_postagem FROM postagem WHERE id_estudante = 2;

SELECT nome_tag FROM tag_post 
INNER JOIN tag ON tag_post.id_tag = tag.id_tag
WHERE id_postagem = 5;