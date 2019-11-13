/* Codigo base de inserção das areas e materias */

INSERT INTO `area` (`id_area`, `nome_area`) VALUES
(1, 'Ciências Humanas'),
(2, 'Ciências da Natureza'),
(3, 'Linguagens e Códigos'),
(4, 'Ciências Exatas');

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
(15, 'Informática', 4);

/* backup dos usuarios */