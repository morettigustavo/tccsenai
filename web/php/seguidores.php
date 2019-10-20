<?php 
session_start();
require_once('conexao.php');

$id_estudante_seguido = $_POST['id_estudante_seguido'];
$id_estudante_seguidor = $_SESSION['id_estudante'];
$tipo = $_POST['tipo'];

$seguindo = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM seguidor WHERE seguidor = $id_estudante_seguidor AND seguido = $id_estudante_seguido"))['count(*)'];
echo $seguindo;
$sql = "";

switch($tipo){
    case "seguir":
    if($id_estudante_seguido != $id_estudante_seguidor){
        if($seguindo){
            $sql = "DELETE FROM seguidor WHERE seguidor = $id_estudante_seguidor AND seguido = $id_estudante_seguido";
        }else{
            $sql = "INSERT INTO seguidor(seguidor, seguido) VALUES ($id_estudante_seguidor,$id_estudante_seguido)";
        }
    }
    break;

}

$query = mysqli_query($link, $sql);

