<?php 
session_start();
require_once('conexao.php');

$id_estudante = $_SESSION['id_estudante'];
$id_publicacao = $_POST['id_publicacao'];
$tipo = $_POST['tipo'];

// SQL
$where = "WHERE id_estudante = $id_estudante AND id_postagem = $id_publicacao";

$query = "SELECT tipo_curtida FROM curtidas $where ";

$sql = mysqli_query($link, $query);
$line = mysqli_fetch_array($sql);

if($line == null){
    $query = "INSERT INTO curtidas(id_postagem, id_estudante, tipo_curtida) VALUES ($id_publicacao, $id_estudante, $tipo)";
}else{
    if($line['tipo_curtida'] == $tipo){
        $query = "DELETE FROM curtidas $where";
    }else{
        if($line['tipo_curtida'] == 1){
            $query = "UPDATE curtidas SET tipo_curtida = -1 $where";
        }else{
            $query = "UPDATE curtidas SET tipo_curtida =  1 $where";
        }
    }
}

$sql = mysqli_query($link, $query);

$qnt_pos = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM curtidas WHERE id_postagem = $id_publicacao AND tipo_curtida = 1"))['count(*)'];
$qnt_neg = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM curtidas WHERE id_postagem = $id_publicacao AND tipo_curtida = -1"))['count(*)'];

$array = array('pos' => $qnt_pos, 'neg' => $qnt_neg);

echo json_encode($array);