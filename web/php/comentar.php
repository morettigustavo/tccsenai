<?php 
session_start();
require_once('conexao.php');

$id_estudante = $_GET['id_estudante'];
$id_postagem = $_GET['id_postagem'];    
$id_comentario = isset($_GET['id_comentario'])?$_GET['id_comentario']:0;
$comentario = isset($_GET['comentario'])?$_GET['comentario']:"";

$data = date('Y-m-d');
$hora = date('H:i:s');
$acao = $_GET['acao'];

switch($acao){
    case "apagar":
        $sql = "DELETE FROM comentarios WHERE id_comentario = $id_comentario";
    break;

    case "enviar":
        $sql = "INSERT INTO comentarios(id_estudante, id_postagem, comentario, data, hora)  VALUES ($id_estudante, $id_postagem, '$comentario', '$data', '$hora')";
    break;

    case "comentarios":
        $sql = "SELECT * FROM comentarios WHERE id_postagem = $id_postagem";
    break;
}

$query = mysqli_query($link, $sql);

if($acao == "comentarios"){
    $array = array();

    while($line = mysqli_fetch_array($query)){
        $line['comentario']= utf8_encode($line['comentario']);
        $array[] = array('id_estudante' => $line['id_estudante'], 'id_postagem' => $line['id_postagem'], 'comentario'=> $line['comentario'], 'data' => $line['data'], 'hora'=> $line['hora']);
    }
    echo json_encode($array);
}