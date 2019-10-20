<?php 
require_once('conexao.php');

$sql = "SELECT 
postagem.id_postagem, postagem.titulo_postagem, postagem.imagem_postagem,
materia.nome_materia,
area.nome_area,
usuario.primeiro_nome_usuario,usuario.segundo_nome_usuario
FROM postagem
INNER JOIN materia ON postagem.id_materia = materia.id_materia
INNER JOIN area ON materia.id_area = area.id_area
INNER JOIN usuario ON postagem.id_estudante = usuario.id_estudante";

$query = mysqli_query($link, $sql);

//JSON de retorno da postagem(Postagem em forma de um json facilita para o front end transformar em dados na tela)

$array = array();
while($line = mysqli_fetch_array($query)){
    $id_postagem = $line['id_postagem'];
    $line['imagem_postagem']= $line['imagem_postagem'];

    $qnt_pos = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM curtidas WHERE id_postagem = $id_postagem AND tipo_curtida = 1"))['count(*)'];
    $qnt_neg = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM curtidas WHERE id_postagem = $id_postagem AND tipo_curtida = -1;"))['count(*)'];

    $array[] = array('id_postagem' => $line['id_postagem'],'titulo_postagem' => $line['titulo_postagem'], 
    'imagem_postagem' => $line['imagem_postagem'], 'nome_materia' => $line['nome_materia'], 
    'nome_area' => $line['nome_area'], 'up'=> $qnt_pos, 'down' => $qnt_neg,
    'primeiro_nome_usuario' => $line['primeiro_nome_usuario'], 'segundo_nome_usuario' => $line['segundo_nome_usuario']);
}
// echo json_encode($array);