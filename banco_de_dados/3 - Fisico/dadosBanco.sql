SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

INSERT INTO `usuario` (`id_estudante`, `primeiro_nome_usuario`, `segundo_nome_usuario`, `portifolio_usuario`, `imagem_usuario`, `email_usuario`, `senha_usuario`) VALUES
(1, 'Alexandre', 'Wesley', NULL, NULL, 'alexandre@gmail.com', '123'),
(2, 'Gustavo', 'Moretti', NULL, NULL, 'moretti@gmail.com', '123'),
(3, 'Dani', 'Fonseca', NULL, '14069d0a20d96905d3e973ebafd1771b', 'danie@gmail.com', '123');

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
(15, 'Informática', 4),
(16, 'PortuguÃªs', 3);


INSERT INTO `postagem` (`id_postagem`, `id_estudante`, `id_materia`, `titulo_postagem`, `imagem_postagem`) VALUES
(1, 2, 1, 'Hidrocarbonetos', '8b6757af1b3b52f4e31f31adaedb7234'),
(2, 2, 1, 'FunÃ§Ãµes da Linguagem', '5740bd58fa7975d5699c0deb53a4bf9c');
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
