<?php 
session_start();
require_once('conexao.php');

$id_estudante = $_GET['id_estudante'];
$id_publicacao = $_GET['id_publicacao'];
$tipo = $_GET['tipo'];

// SQL
$where = "WHERE id_estudante = $id_estudante AND id_postagem = $id_publicacao";

$query = "SELECT tipo FROM curtidas $where ";

$sql = mysqli_query($link, $query);
$line = mysqli_fetch_array($sql);

if($line == null){
    $query = "INSERT INTO curtidas(id_postagem, id_estudante, tipo) VALUES ($id_publicacao, $id_estudante, $tipo)";
}else{
    if($line['tipo'] == $tipo){
        $query = "DELETE FROM curtidas $where";
    }else{
        if($line['tipo'] == 1){
            $query = "UPDATE curtidas SET tipo = -1 $where";
        }else{
            $query = "UPDATE curtidas SET tipo =  1 $where";
        }
    }
}


$sql = mysqli_query($link, $query);
