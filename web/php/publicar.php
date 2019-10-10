<?php 
session_start();
require_once('conexao.php');



$titulo = $_GET['titulo'];
$area = $_GET['area'];
$materia = $_GET['materia'];
$tags = $_GET['tags'];

$id_user = $_SESSION['id_estudante'];

$sql = "INSERT INTO postagem(id_estudante,id_materia,titulo) VALUES ($id_user,1,'$titulo')";

mysqli_query($link, $sql);

// $caminho = "postagens/";
// @mkdir($caminho, 0777);
// $name = "foto";
//     if(isset($_FILES[$name]['name'])){
//     $foto = $_FILES[$name]['name'];
//     move_uploaded_file($_FILES[$name]['tmp_name'], $pasta."/imagem$i.png");
// }
