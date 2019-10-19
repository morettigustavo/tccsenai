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

SELECT * FROM usuario WHERE id_estudante = 1;
