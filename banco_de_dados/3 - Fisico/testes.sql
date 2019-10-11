SELECT * FROM materia WHERE upper(nome) like '%$materia%';

SELECT usuario.primeiro_nome, usuario.segundo_nome, comentarios.*
FROM comentarios
INNER JOIN usuario ON comentarios.id_estudante = usuario.id_estudante
WHERE id_postagem = 2;

INSERT INTO materia(nome,id_area) VALUES ('Ingles', 2);

select * from materia;
