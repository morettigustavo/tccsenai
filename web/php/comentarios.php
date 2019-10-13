<?php 
session_start();
require_once('conexao.php');

$id_estudante =  isset($_GET['id_estudante' ])?$_GET['id_estudante']:0;
$id_comentario = isset($_GET['id_comentario'])?$_GET['id_comentario']:0;
$id_postagem = isset($_GET['id_postagem'])?$_GET['id_postagem']:0;   
$comentario = isset($_GET['comentario'])?$_GET['comentario']:"";
$acao = $_GET['acao'];

$data = date('Y-m-d');
$hora = date('H:i:s');
$sql = "";

switch($acao){
    case "apagar":
        $sql = "DELETE FROM comentarios WHERE id_comentario = $id_comentario";
    break;

    case "enviar":
        $sql = "INSERT INTO comentarios(id_estudante, id_postagem, texto_comentario, data_comentario, hora_comentario)  VALUES ($id_estudante, $id_postagem, '$comentario', '$data', '$hora')";
    break;

    case "comentarios":
        $sql = "SELECT usuario.primeiro_nome_usuario, usuario.segundo_nome_usuario, comentarios.*
        FROM comentarios
        INNER JOIN usuario ON comentarios.id_estudante = usuario.id_estudante
        WHERE id_postagem = $id_postagem";
    break;

    default:
        echo "Opção inexistente";
    break;
}

$query = mysqli_query($link, $sql);

if($acao == "comentarios"){
    $array = array();

    while($line = mysqli_fetch_array($query)){
        $line['comentario']= utf8_encode($line['comentario']);
        $array[] = array('id_estudante' => $line['id_estudante'], 'id_postagem' => $line['id_postagem'], 'texto_comentario'=> $line['texto_comentario'], 'data_comentario' => $line['data_comentario'], 'hora_comentario'=> $line['hora_comentario'], 'primeiro_nome_usuario' => $line['primeiro_nome_usuario'], 'segundo_nome_usuario' => $line['segundo_nome_usuario']);
    }
    echo json_encode($array);
}
